<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Providers\MathOperationProvider;

class mathoperation extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mathoperation';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Math Operation';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
         $number1 = $this->ask('Give me a number?');
         $operator = $this->choice("Type a simple mathematical operator ('+' or '-' or '/' or '*')", ['+', '-', '/', '*']);
         $number2 = $this->ask('Give me a second number?');
         $mathop = app(\App\MathOpInterface::class, [$number1, $number2]);    
         if($operator == '/'){
             $this->comment("Result: ".$mathop->Between($number1, $number2));
         }
         if($operator == '+'){
             $this->comment("Result: ".$mathop->Plus($number1, $number2));
         }
         if($operator == '-'){
             $this->comment("Result: ".$mathop->Minus($number1, $number2));
         }
         if($operator == '*'){
             $this->comment("Result: ".$mathop->Multiplication($number1, $number2));
         }
    }
    
}
