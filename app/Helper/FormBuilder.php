<?php


namespace App\Helper;


class FormBuilder
{
    public function __construct($action, $method, $class = '')
    {
        $this->html = '<form class="' . $class . '" action="' . $action . '" method="' . $method . '">';
    }

    public function get()
    {
        $this->html .= '</form>';
        return $this->html;
    }

    public function addInput($attributes, $class = '', $label = '')
    {
        $html = '';
        //Setting up label
        if ($label != '') {
            if (array_key_exists('id', $attributes)) {
                $for = 'for="' . $attributes['id'] . '"';
            } else {
                $for = '';
            }
            $html .= '<label ' . $for . '>' . ucfirst($label) . '</label>';
        }
        //Setting input
        $html .= '<input '; //
        foreach ($attributes as $key => $element) {
            $html .= ' ' . $key . '="' . $element . '"';
        }
        $html .= ' class="' . $class . '"';
        $html .= ' autocomplete="' . 'off' . '"';
        $html .= ' >';
        $this->html .= $html;
        return $this;
    }

    public function addSelect($options, $name, $id, $class = '', $label = '')
    {
        $html = '';
        if ($label != '') {
            $html .= '<label>' . $label . '</label>';
        }
        $html .= '<select name="' . $name . '"' . ' ' . 'class="' . $class . '"' . ' ' . 'id="' . $id . '"' . '>';
        foreach ($options as $value => $option) {
            $html .= '<option value="' . $value . '"';
            $html .= ' >';
            $html .= ucfirst($option);
            $html .= '</option>';
        }
        $html .= '</select>';
        $this->html .= $html;
        return $this;
    }

    public function addSubmit($attributes, $class = '')
    {
        $html = '';
        $html .= '<input ';
        foreach ($attributes as $key => $element) {
            $html .= $key . '="' . $element . '"';
        }
        $html .= ' class="' . $class . '"';
        $html .= '>';
        $this->html .= $html;
        return $this;
    }

}