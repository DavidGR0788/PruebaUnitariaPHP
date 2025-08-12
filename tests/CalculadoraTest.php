<?php
declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Calculadora;

final class CalculadoraTest extends TestCase
{
    public function testSumar(): void
    {
        $calc = new Calculadora();
        $this->assertSame(3, $calc->sumar(1, 2));
        $this->assertSame(0, $calc->sumar(-1, 1));
        $this->assertSame(0, $calc->sumar(0, 0));
    }
}