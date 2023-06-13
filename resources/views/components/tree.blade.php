<?php
$refers = DB::table('users')
    ->where('refer', $user->username)
    ->get();
?>
@foreach ($refers as $refer)
<li>
    <a href="{{ route('user.team.index', ['id' => $refer->id]) }}" class="text-white"><img class="img-avatar" width="80" src="{{ asset('assets/profile/default.png') }}" alt="User Avatar">
        <br>
        {{ $refer->username }} <br>
        $ {{ number_format(myPlanCount($refer->id), 2) }} <br>
        <p class="text-primary mb-0"><?php
                                        if ($refer->network == 1) {
                                            echo 'Membership';
                                        } else {
                                            if (myPlanCount($refer->id) > 0) {
                                                echo 'Normal Account';
                                            } else {
                                                echo 'Rocky Account';
                                            }
                                        }
                                        ?></p>


    </a>
    <ul>
        <x-tree :user="$refer" />
    </ul>
</li>
@endforeach