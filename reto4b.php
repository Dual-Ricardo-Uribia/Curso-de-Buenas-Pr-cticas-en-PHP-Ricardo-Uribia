<?php
    class Programmer{
        public function code(){
            return 'code';
        }
    }
    class Tester{
        public function test(){
            return 'test';
        }
    }
    class ProjectManagement{
        public function process($member){
            if ($member instanceof Programmer){
                $member->code();
            }elseif ($member instanceof Tester){
                $member->test();
            };
            throw new Exception('Invalid input member');
        }
    }
    ?>