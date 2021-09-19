# phpunit-alura
Small application  with example of unit tests
## Installation

Install the project

```bash
composer Install
```
## Running Tests

To run tests, run the following command

```bash
  vendor/bin/phpunit
```

Output

```
PHPUnit 9.5.9 by Sebastian Bergmann and contributors.

................                                                  16 / 16 (100%)

Time: 00:00.010, Memory: 6.00 MB

OK (16 tests, 32 assertions)
```
Look the file `testes-executados.txt`

```
Leilao (Alura\Leilao\Tests\Model\Leilao)
 [x] Leilao deve receber lances with data set "2-lances"
 [x] Leilao deve receber lances with data set "1-lance"
 [x] Leilao deve receber lances with data set "0-lance"
 [x] Leilao nao deve aceitar mais de 5 lances por usuario
 [x] Leilao nao deve receber lances repetidos

Avaliador (Alura\Leilao\Tests\Service\Avaliador)
 [x] Avaliador deve encontrar o maior valor de lances with data set "ordem-aleatoria"
 [x] Avaliador deve encontrar o maior valor de lances with data set "ordem-crescente"
 [x] Avaliador deve encontrar o maior valor de lances with data set "ordem-decrescente"
 [x] Avaliador deve encontrar o menor valor de lances with data set "ordem-aleatoria"
 [x] Avaliador deve encontrar o menor valor de lances with data set "ordem-crescente"
 [x] Avaliador deve encontrar o menor valor de lances with data set "ordem-decrescente"
 [x] Avaliador deve buscar 3 maiores valores with data set "ordem-aleatoria"
 [x] Avaliador deve buscar 3 maiores valores with data set "ordem-crescente"
 [x] Avaliador deve buscar 3 maiores valores with data set "ordem-decrescente"
 [x] Leilao vazio nao pode ser avaliado
 [x] Leilao finalizado nao pode ser avaliado
```