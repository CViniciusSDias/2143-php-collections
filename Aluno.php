<?php

use Ds\Hashable;

class Aluno implements Hashable
{
    public function __construct(public string $nome)
    {
    }

    public function equals($obj): bool
    {
        if (!$obj instanceof Aluno) {
            return false;
        }

        return $obj->nome === $this->nome;
    }

    public function hash()
    {
        return $this->nome;
    }
}