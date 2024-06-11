<?php

namespace Src;
class MyGreeter
{
    /**
     * @var int 当时小时
     */
    protected int $hour;

    public function __construct()
    {
        $this->hour = date('H');//获取当前小时
    }

    /**
     * @return string
     */
    public function greeting(): string
    {
        if ($this->hour >= 6 && $this->hour < 12) {
            return $this->_greetMorning();
        }

        if ($this->hour >= 12 && $this->hour < 18) {
            return $this->_greetAfternoon();
        }

        return $this->_greetEvening();
    }

    /**
     * @return string
     */
    protected function _greetMorning(): string
    {
        return 'Good morning';
    }

    /**
     * @return string
     */
    protected function _greetAfternoon(): string
    {
        return 'Good afternoon';
    }

    /**
     * @return string
     */
    protected function _greetEvening(): string
    {
        return 'Good evening';
    }
}