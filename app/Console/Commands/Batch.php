<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Schedule;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class Batch extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:sendmail';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'スケジュールをもとにメール通知';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function __construct()
    {
        parent::__construct();
    }
    
    
    public function handle()
    {
        //今日の日付から14日後の日に、イベント開始日が登録されていたら実行
        $senddate = date('Y/m/d', strtotime('+14 day'));
        $schedules = Schedule::where('start_date', '=', $senddate)
                     ->get();
				$mail_content = Mailmaster::where('mail_name', '=', '$schedule->schedule_name')
                     ->first();
				$title = $mail_content->title;
				$body = $mail_content->body;

        //メール送信をする
        foreach ($schedules as $schedule) {
            Mail::send('mail.'. $body, [
							
						], function ($message) use ($schedule) {
                $message->to('ai.mmm1225@gmail.com')->subject($title);

                //ゆくゆくメアド変える
                //$message->to($schedule->user->email)->subject($schedule->schedule);

            });
        }
    }
}