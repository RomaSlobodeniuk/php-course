<?php

namespace Api;

/**
 * Абстрактна фабрика (abstract factory)
 */
interface IToyFactory
{
    /**
     * @return mixed
     */
    public function getBear();

    /**
     * @return mixed
     */
    public function getCat();
}
