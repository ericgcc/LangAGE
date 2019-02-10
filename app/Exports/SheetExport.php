<?php

namespace App\Exports;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithTitle;

class SheetExport implements FromCollection, WithTitle, WithHeadings
{
    private $question;

    public function __construct($question)
    {
        $this->question = $question;
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        // getting all users
        $users = User::all('username')->sortBy('id');

        $query = "select track_id";

        foreach($users as $user)
            $query .= ", MAX(CASE WHEN username = '$user->username' then rating end)  as $user->username";

        $query .=" from (select username, track_id, rating
                          from ratings r inner join users u on r.user_id = u.id
                          where question_id = :question_id
                          order by user_id, track_id
                    ) as core
                    group by track_id
                    order by track_id";

        $result = collect(DB::select(DB::raw($query), ['question_id' => $this->question]));

        return $result;
    }

    /**
     * @return string
     */
    public function title(): string
    {
        return 'Question ' . $this->question;
    }

    public function headings(): array
    {
        $users = User::all('username')->sortBy('id');
        $headings = ['track'];

        foreach($users as $users)
            $headings[] = $users->username;
        //array_push($headings, $users->username);

        return $headings;
    }
}
