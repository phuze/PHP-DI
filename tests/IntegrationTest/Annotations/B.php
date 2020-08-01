<?php

declare(strict_types=1);

namespace DI\Test\IntegrationTest\Annotations;

use DI\Annotation\Inject;

class B
{
    /**
     * @Inject
     */
    public A $public;

    /**
     * @Inject
     */
    protected A $protected;

    /**
     * @Inject
     */
    private A $private;

    public function getProtected()
    {
        return $this->protected;
    }

    public function getPrivate()
    {
        return $this->private;
    }
}
