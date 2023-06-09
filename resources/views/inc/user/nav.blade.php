<script>
    function toggleDropdown() {
        var dropdown = document.getElementById("forms");
        dropdown.classList.toggle("show");
    }
</script>
<div class="sidebar-body">
    <ul class="nav">
        <li class="nav-item nav-category">Main</li>
        <li class="nav-item">
            <a href="{{ route('user.dashboard') }}" class="nav-link">
                <i class="link-icon" data-feather="box"></i>
                <span class="link-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item nav-category">Investment</li>
        <li class="nav-item">
            <a href="{{ route('user.deposit.index') }}" class="nav-link">
                <i class="link-icon" data-feather="box"></i>
                <span class="link-title">Add Balance</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('user.plan.index') }}" class="nav-link">
                <i class="link-icon" data-feather="box"></i>
                <span class="link-title">Packages</span>
            </a>
        </li>
        <li class="nav-item nav-category">Withdraw Request</li>
        <li class="nav-item">
            <a href="{{ route('user.withdraw.index') }}" class="nav-link">
                <i class="link-icon" data-feather="box"></i>
                <span class="link-title">Withdraw</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('user.roi.withdraw.roiWithdraw') }}" class="nav-link">
                <i class="link-icon" data-feather="box"></i>
                <span class="link-title">ROI Withdraw</span>
            </a>
        </li>
        <li class="nav-item nav-category">Ranks Detail</li>
        <li class="nav-item">
            <a href="{{ route('user.statement.ranks') }}" class="nav-link">
                <i class="link-icon" data-feather="box"></i>
                <span class="link-title">Ranks & Reward</span>
            </a>
        </li>
        <li class="nav-item nav-category">Affiliate Detail</li>
        <li class="nav-item">
            <a href="{{ route('user.team.index') }}" class="nav-link">
                <i class="link-icon" data-feather="box"></i>
                <span class="link-title">My Team</span>
            </a>
        </li>
        <li class="nav-item nav-category">Uni-Level Bonus</li>
        <li class="nav-item">
            <a href="{{ route('user.statement.direct.team') }}" class="nav-link">
                <i class="link-icon" data-feather="box"></i>
                <span class="link-title">Direct Refer</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="javascript:void(0);" role="button" aria-expanded="false" aria-controls="forms" onclick="toggleDropdown()">
                <i class="link-icon" data-feather="inbox"></i>
                <span class="link-title">Level Wise Comm.</span>
                <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="forms">
                <ul class="nav sub-menu">
                    <li class="nav-item">
                        <a href="{{ route('user.statement.indirect.level1') }}" class="nav-link">Level 1 Commission</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('user.statement.indirect.level2') }}" class="nav-link">Level 2 Commission</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('user.statement.indirect.level3') }}" class="nav-link">Level 3 Commission</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('user.statement.indirect.level4') }}" class="nav-link">Level 4 Commission</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('user.statement.indirect.level5') }}" class="nav-link">Level 5 Commission</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('user.statement.indirect.level6') }}" class="nav-link">Level 6 Commission</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('user.statement.indirect.level6') }}" class="nav-link">Level 7 Commission</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('user.statement.indirect.level6') }}" class="nav-link">Level 8 Commission</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('user.statement.indirect.level6') }}" class="nav-link">Level 9 Commission</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('user.statement.indirect.level6') }}" class="nav-link">Level 10 Commission</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item nav-category">Account Statement</li>
        <li class="nav-item">
            <a href="{{ route('user.statement.deposits') }}" class="nav-link">
                <i class="link-icon" data-feather="box"></i>
                <span class="link-title">All Deposit</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('user.plan.active.index') }}" class="nav-link">
                <i class="link-icon" data-feather="box"></i>
                <span class="link-title">Total Pacakges</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('user.statement.roi') }}" class="nav-link">
                <i class="link-icon" data-feather="box"></i>
                <span class="link-title">ROI Profit</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('user.statement.roi.withdrawals') }}" class="nav-link">
                <i class="link-icon" data-feather="box"></i>
                <span class="link-title">ROI Withdrawals</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('user.statement.direct') }}" class="nav-link">
                <i class="link-icon" data-feather="box"></i>
                <span class="link-title">Direct Bonus</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('user.statement.withdrawals') }}" class="nav-link">
                <i class="link-icon" data-feather="box"></i>
                <span class="link-title">All Withdawals</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('user.statement.reward') }}" class="nav-link">
                <i class="link-icon" data-feather="box"></i>
                <span class="link-title">Direct Ranks History</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('user.statement.global.share') }}" class="nav-link">
                <i class="link-icon" data-feather="box"></i>
                <span class="link-title">Global Share Reward</span>
            </a>
        </li>
        <li class="nav-item nav-category">My Account</li>
        <li class="nav-item">
            <a href="{{ route('user.profile.index') }}" class="nav-link">
                <i class="link-icon" data-feather="box"></i>
                <span class="link-title">My Profile</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('user.profile.password.change') }}" class="nav-link">
                <i class="link-icon" data-feather="box"></i>
                <span class="link-title">Change Password</span>
            </a>
        </li>
        <li class="nav-item nav-category">Help \ Support</li>
        <li class="nav-item">
            <a href="{{ route('user.support.index') }}" class="nav-link">
                <i class="link-icon" data-feather="box"></i>
                <span class="link-title">Support Section</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('user.support.create') }}" class="nav-link">
                <i class="link-icon" data-feather="box"></i>
                <span class="link-title">Create new Ticket</span>
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