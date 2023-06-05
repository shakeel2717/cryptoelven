<div class="sidebar-body">
    <ul class="nav">
        <li class="nav-item nav-category">Main</li>
        <li class="nav-item">
            <a href="{{ route('admin.dashboard') }}" class="nav-link">
                <i class="link-icon" data-feather="box"></i>
                <span class="link-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item nav-category">Finance</li>
        <li class="nav-item">
            <a href="{{ route('admin.addBalance') }}" class="nav-link">
                <i class="link-icon" data-feather="box"></i>
                <span class="link-title">Add Balance</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.history.withdrawals.pending') }}" class="nav-link">
                <i class="link-icon" data-feather="box"></i>
                <span class="link-title">Pending Withdrawals</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.history.withdrawals') }}" class="nav-link">
                <i class="link-icon" data-feather="box"></i>
                <span class="link-title">All Withdrawals</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.history.withdrawals.hidden') }}" class="nav-link">
                <i class="link-icon" data-feather="box"></i>
                <span class="link-title">Hidden Withdrawals</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.history.withdrawals.profit') }}" class="nav-link">
                <i class="link-icon" data-feather="box"></i>
                <span class="link-title">All Profit Withdraw</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.history.withdrawals.pending.profit') }}" class="nav-link">
                <i class="link-icon" data-feather="box"></i>
                <span class="link-title">Pend. Withdraw Profit</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.history.withdrawals.pending.profit.hidden') }}" class="nav-link">
                <i class="link-icon" data-feather="box"></i>
                <span class="link-title">Withdraw Profit Hidden</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.email.index') }}" class="nav-link">
                <i class="link-icon" data-feather="box"></i>
                <span class="link-title">Send E-Mails</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.history.users') }}" class="nav-link">
                <i class="link-icon" data-feather="box"></i>
                <span class="link-title">All Users</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.history.users.online') }}" class="nav-link">
                <i class="link-icon" data-feather="box"></i>
                <span class="link-title">Online Users</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.history.users.rewards') }}" class="nav-link">
                <i class="link-icon" data-feather="box"></i>
                <span class="link-title">All Users Rewards</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.history.user.plan') }}" class="nav-link">
                <i class="link-icon" data-feather="box"></i>
                <span class="link-title">User's Plans</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.history.user.plan.refund') }}" class="nav-link">
                <i class="link-icon" data-feather="box"></i>
                <span class="link-title">Refund Request</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.history.deposits') }}" class="nav-link">
                <i class="link-icon" data-feather="box"></i>
                <span class="link-title">Deposits</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.history.rois') }}" class="nav-link">
                <i class="link-icon" data-feather="box"></i>
                <span class="link-title">All Roi's</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.history.passive') }}" class="nav-link">
                <i class="link-icon" data-feather="box"></i>
                <span class="link-title">All Passive TID</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.history.global.share') }}" class="nav-link">
                <i class="link-icon" data-feather="box"></i>
                <span class="link-title">All Global Share</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.history.direct.commission') }}" class="nav-link">
                <i class="link-icon" data-feather="box"></i>
                <span class="link-title">All Direct Commission</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.history.indirect.commission') }}" class="nav-link">
                <i class="link-icon" data-feather="box"></i>
                <span class="link-title">All Indirect Commission</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.history.direct.reward') }}" class="nav-link">
                <i class="link-icon" data-feather="box"></i>
                <span class="link-title">Direct Rewards</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.history.indirect.reward') }}" class="nav-link">
                <i class="link-icon" data-feather="box"></i>
                <span class="link-title">In-Direct Rewards</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.history.tour.dubai') }}" class="nav-link">
                <i class="link-icon" data-feather="box"></i>
                <span class="link-title">Dubai Tour Winner</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.history.networkcap') }}" class="nav-link">
                <i class="link-icon" data-feather="box"></i>
                <span class="link-title">All 5x Cap</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.history.coinpayment') }}" class="nav-link">
                <i class="link-icon" data-feather="box"></i>
                <span class="link-title">Comp. Coin Payments</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.history.coinpayment.other') }}" class="nav-link">
                <i class="link-icon" data-feather="box"></i>
                <span class="link-title">Other Coin Payments</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.history.user.support.index') }}" class="nav-link">
                <i class="link-icon" data-feather="box"></i>
                <span class="link-title">All Support Req</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.winner.self') }}" class="nav-link">
                <i class="link-icon" data-feather="box"></i>
                <span class="link-title">Self Sell Winner</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.winner.direct') }}" class="nav-link">
                <i class="link-icon" data-feather="box"></i>
                <span class="link-title">Direct Sell Winner</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.winner.levels') }}" class="nav-link">
                <i class="link-icon" data-feather="box"></i>
                <span class="link-title">Levels Sell Winner</span>
            </a>
        </li>

        

        <!-- Logout Route -->
        <li class="nav-item nav-category">Exit</li>
        <form action="{{ route('logout') }}" id="logoutForm" method="POST">
            @csrf
        </form>
        <li class="nav-item">
            <a href="javascript:;" onclick="logoutFunction()" class="nav-link">
                <i class="link-icon" data-feather="hash"></i>
                <span class="link-title">Sign Out</span>
            </a>
        </li>
    </ul>
</div>