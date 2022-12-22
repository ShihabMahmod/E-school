<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\student;
use App\Models\studentPayment;


class studentSetPayment extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'setStudentPayment:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Set student payment in every mounth';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        $no_student = student::count();

        for($i = 1; $i <= $no_student; $i++){

            studentPayment::create([
                'student_id' => 1,
                'payment_amount' => 2000,
                'pay_amount' => 1000,
                'payment_status' =>1
            ]);
            
        }
    }
}
