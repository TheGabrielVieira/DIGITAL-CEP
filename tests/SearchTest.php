<?php

use PHPUnit\Framework\TestCase;
use Avell\DigitalCep\Search;

class SearchTest extends TestCase{
    /**
     * @dataProvider dadosTeste
     */

    public function testGetAddressFromZipcodeDefaultUsage(string $input, array $esperado){
        $resultado = new Search;
        $resultado = $resultado->getAddressFromZipcode($input);

        $this->assertEquals($esperado, $resultado);

    }

    public function dadosTeste(){
        return [
            "Endereço Praça da Sé" => [
                "01001000",
                [
                    "cep"=> "01001-000",
                    "logradouro"=> "Praça da Sé",
                    "complemento"=> "lado ímpar",
                    "bairro"=> "Sé",
                    "localidade"=> "São Paulo",
                    "uf"=> "SP",
                    "ibge"=> "3550308",
                    "gia"=> "1004",
                    "ddd"=> "11",
                    "siafi"=> "7107",
                ]
            ],
            "Endereço Qualquer" => [
                "55700000",
                [
                    "cep" => "55700-000",
                    "logradouro" => "",
                    "complemento" => "",
                    "bairro" => "",
                    "localidade" => "Limoeiro",
                    "uf" => "PE",
                    "ibge" => "2608909",
                    "gia" => "",
                    "ddd" => "81",
                    "siafi" => "2477",
                ]
            ]
        ];
    }
}