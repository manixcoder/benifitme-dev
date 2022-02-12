<div class="side-bar text-left">
  <ul>
    <li>
      <a href="{{ URL::to('/') }}">
        <img src="{{ asset('public/adminAssets/images/sp_dashboard.png')}}" alt="Dashboard">
        Dashboard
      </a>
    </li>
    <li>
      <a href="{{ url('admin/user-management') }}">
        <img src="{{ asset('public/adminAssets/images/sp_users.png')}}" alt="users">
        Users
      </a>
    </li>
    <li>
      <a href="{{ url('admin/company-management') }}">
        <img src="{{ asset('public/adminAssets/images/sp_companies.png')}}" alt="Companies">
        Companies
      </a>
    </li>
    <li>
      <a href="{{ url('admin/advertising-management') }}">
        <img src="{{ asset('public/adminAssets/images/sp_advertising.png')}}" alt="Advertising">
        Advertising
      </a>
    </li>
    <li>
      <a href="{{ url('admin/awards-management') }}">
        <img src="{{ asset('public/adminAssets/images/sp_awards.png')}}" alt="awards">
        Awards
      </a>
    </li>
    <li>
      <a href="{{ url('admin/subscription-management') }}">
        <img src="{{ asset('public/adminAssets/images/sp_subscriptions.png')}}" alt="Subscriptions">
        Subscriptions
      </a>
    </li>
    <li>
      <a href="{{ url('admin/payment-management') }}">
        <img src="{{ asset('public/adminAssets/images/sp_payments.png')}}" alt="Payments">
        Payments
      </a>
    </li>
    <li>
      <a href="#">
        <img src="{{ asset('public/adminAssets/images/sp_messages.png')}}" alt="Messages">
        Messages
      </a>
    </li>
    <li>
      <a href="{{ url('admin/category-management') }}">
        <img src="{{ asset('public/adminAssets/images/sp_business_category.png')}}" alt="sp_business_category">
        Business Category
      </a>
    </li>
    <li>
      <a href="{{ url('admin/permissions-management') }}">
        <img src="{{ asset('public/adminAssets/images/sp_role_access.png')}}" alt="sp_role_access">
        Role Access Company Category Wise
      </a>
    </li>
    <!--li>
      <a href="#">
        <img src="{{ asset('public/adminAssets/images/sp_role_access.png')}}" alt="role">
        Role Access Company Category Wise
      </a>
    </li -->
  </ul>
</div>