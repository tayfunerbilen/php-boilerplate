<?php

namespace Core;

class Upload
{

    private static Upload $instance;
    public \Verot\Upload\Upload $upload;
    public string $file;
    public array $options = [];

    public static function getInstance($name)
    {
        if (!isset(self::$instance)) {
            self::$instance = new self($name);
        }
        return self::$instance;
    }

    public function __construct($name)
    {
        $this->upload = new \Verot\Upload\Upload($_FILES[$name], config('LOCALE'));
        $this->options = [];
    }

    public function __destruct()
    {
        $this->options = [];
        $this->upload->clean();
    }

    public function rename($name)
    {
        $this->options['file_new_name_body'] = $name;
        return $this;
    }

    public function options(array $options)
    {
        foreach ($options as $key => $option) {
            $this->options[$key] = $option;
        }
        return $this;
    }

    public function resize($width, $height = null, $crop = true)
    {
        $this->options['image_resize'] = true;
        $this->options['image_x'] = $width;

        if ($height) {
            $this->options['image_y'] = $height;
            $this->options['image_ratio_crop'] = $crop;
        } else {
            $this->options['image_ratio_y'] = true;
        }
        return $this;
    }

    public function convert($ext)
    {
        $this->options['image_convert'] = $ext;
        return $this;
    }

    public function watermark($text = null)
    {
        if ($text) {
            $this->options['image_unsharp'] = true;
            $this->options['image_border'] = '0 0 16 0';
            $this->options['image_border_color'] = '#000000';
            $this->options['image_text'] = $text;
            $this->options['image_text_font'] = 2;
            $this->options['image_text_position'] = 'B';
            $this->options['image_text_padding_y'] = 2;
        }
        return $this;
    }

    public function prefix($prefix)
    {
        $this->options['file_name_body_pre'] = $prefix . '_';
        return $this;
    }

    public function allowed($mimes)
    {
        $this->options['allowed'] = $mimes;
        return $this;
    }

    public function onlyImages()
    {
        $this->options['allowed'] = ['image/*'];
        return $this;
    }

    public function to($path)
    {
        foreach ($this->options as $key => $value) {
            $this->upload->{$key} = $value;
        }
        if ($this->upload->uploaded) {
            $this->upload->process(dirname(__DIR__) . '/' . $path);
            if ($this->upload->processed) {
                $this->file = $this->upload->file_dst_name;
            }
        }
        return $this;
    }

    public function getFile()
    {
        return $this->upload->file_dst_name;
    }

    public function getFileWithPath()
    {
        return $this->upload->file_dst_pathname;
    }

    public function error()
    {
        $this->upload->process();
        return $this->upload->error;
    }

}