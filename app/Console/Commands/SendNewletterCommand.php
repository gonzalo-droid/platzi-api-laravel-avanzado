<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use User;
use NewsletterNotification;

class SendNewletterCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    //name commands
    protected $signature = 'send:newsletter {emails?*}';
    // ? options
    // * tipo array

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'enviar un correo';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $emails = $this->argument('emails');
        $builder = User::query();
        if($emails){
            $builder->whereIn('email',$emails);
        }
        $count = $builder->count();
       

        if($count){
            $this->output->progressStart($count);

            $builder->whereNotNull('email_verified_at')
            ->each(function (User $user){
                $user->notify(new NewsletterNotification());

                $this->output->progressAdvance();
            });

            $this->info('Se enviaron {$count}  correos');
             $this->output->progressFinish();
        }else{
            $this->info('No se envio ningun correo');
        }
        
    }
}
