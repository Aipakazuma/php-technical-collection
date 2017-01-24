<?php

class Hoge
{
  public function main() 
  {
    try {
      throw new Exception('Exception Hoge!');
    } catch (Exception $e) {
      // call this catch scope.
      echo $e->getMessage();
    }
  }
}


class Fuga
{
  public function main()
  {
    try {
      (new Hoge())->main();
    } catch (Exception $e) {
      // not call this catch scope.
      echo 'Fuga';
      echo $e->getMessage();
    }
  }
}

(new Fuga())->main();
