<?php
$name = 'James';

$name .= 'Bond';

$bond_info = [

    'first_name' => 'James',
    'last_name' => 'Bond',
    'gun' => 'Walther PPK',
    'car' => 'Aston Martin',
    'enemy' => 'Stavro Blofeld',
    'relationship_status' => 'widower',
    'cases' => 24
];

echo 'The name is ' . $bond_info['first_name'] . ". {$bond_info['first_name']} {$bond_info['last_name']}.";

echo "One day when I was driving my {$bond_info['car']}in the Alps" .
"{$bond_info['enemy']} came along and made me a {$bond_info['relationship_status']}." .
" if only I had my {$bond_info['gun']} with me!";

$bond_info['last_case'] = 'Spectre';

class bondCase
{
protected $name = null;
protected $year = null;
protected $enemy = null;

public function setName($name)
{
    return $this->$name;
}
public function getName()
{
    return $this->name;
}
public function getYear()
{
    return $this->year;
}
public function setYear($year)
{
    return $this->$year;
}
public function getEnemy()
{
    return $this->enemy;
}
public function setEnemy($enemy)
{
    return $this->$enemy;
}
}