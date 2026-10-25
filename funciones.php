<?php

/**
 * Calcula el precio con IVA.
 * @param float $precio Precio sin IVA.
 * @param int $iva Porcentaje de IVA.
 * @return float Precio final.
 */
function precioConIva($precio, $iva)
{
    return $precio * (1 + $iva / 100);
}

/**
 * Devuelve un saludo
 * @return String Un saludo con mi nombre
 */
function sumarJose(int $num1, int $num2)
{
    return $num1 + $num2;
}
