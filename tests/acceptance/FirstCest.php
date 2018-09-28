<?php


class FirstCest
{
    public function login()
    {
        $pass = '';
        $log = '';

        return $pass . $log;
    }


    public function _before(AcceptanceTester $I)
    {
        $pass = '';
        $log = '';
        $light = '10';
        $spy = '0';
        $axe = '';

        $I->amOnPage('/');
        $I->fillField('username', '' . $log . '');
        $I->fillField('password', '' . $pass . '');
        $I->click('//*[@id="login_form"]/div/div/a');
        $I->wait(2);
        $I->click('//*[@id="home"]/div[3]/div[3]/div[10]/div[3]/div[2]/div[1]/a[2]/span');
        $I->wait(3);

        $tryopen = 0;
        while ($tryopen <= 15):{
            $I->click('//*[@id="menu_row2_village"]/a');// Click to village
            $I->click('//*[@id="show_summary"]/div/div/div[25]'); // Площадь
            $I->fillField('light', "" . $light . ''); // Кол-во легкой
            $I->fillField('spy', '' . $spy . ''); // Кол-во разведки
            $I->fillField('axe', '' . $axe . ''); // Кол-во разведки
            $I->click('//*[@id="command_target"]/table/tbody/tr[1]/td/a'); // Предведущая деревня
            $I->click('//*[@id="target_attack"]'); // Нажать атаку
            $I->click('//*[@id="troop_confirm_go"]'); // Подтвердить
            $I->wait(1);
            $tryopen++;
        }
        endwhile;


    }
}


