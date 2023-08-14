<nav class="sidebar">
      <div class="sidebar-header">
        <a href="{{ route('admin.dashboard')}}" class="sidebar-brand">
          SNT<span>Project</span>
        </a>
        <div class="sidebar-toggler not-active">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
      <div class="sidebar-body">
        <ul class="nav">
          <li class="nav-item nav-category">Main</li>
          <li class="nav-item">
            <a href="{{ route('admin.dashboard')}}" class="nav-link">
              <i class="link-icon" data-feather="box"></i>
              <span class="link-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item nav-category">SNTProject</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#emails" role="button" aria-expanded="false" aria-controls="emails">
              <i class="link-icon" data-feather="mail"></i>
              <span class="link-title">Property Type</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="emails">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="{{ route('all.type')}}" class="nav-link">All Type</a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('add.type')}}" class="nav-link">Add Type</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#amenities" role="button" aria-expanded="false" aria-controls="amenities">
              <i class="link-icon" data-feather="mail"></i>
              <span class="link-title">Amenities Type</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="amenities">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="{{ route('all.amenities')}}" class="nav-link">All Amenities</a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('add.amenities')}}" class="nav-link">Add Amenities</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a href="pages/apps/calendar.html" class="nav-link">
              <i class="link-icon" data-feather="calendar"></i>
              <span class="link-title">Calendar</span>
            </a>
          </li>

          <li class="nav-item nav-category">Role & Permission</li>
              <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="collapse" href="#uiComponents" role="button" aria-expanded="false" aria-controls="uiComponents">
                    <i class="link-icon" data-feather="feather"></i>
                    <span class="link-title">Role & Permission</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                  </a>
                    <div class="collapse" id="uiComponents">
                          <ul class="nav sub-menu">
                            <li class="nav-item">
                              <a href="{{ route('all.permission') }}" class="nav-link">All Permission</a>
                            </li>
                            <li class="nav-item">
                              <a href="{{ route('all.roles') }}" class="nav-link">All Role</a>
                            </li>
                            <li class="nav-item">
                              <a href="{{ route('add.roles.permission') }}" class="nav-link">Add Role in Premission</a>
                            </li>
                            <li class="nav-item">
                              <a href="{{ route('all.roles.permission') }}" class="nav-link">Role in Premission</a>
                            </li>
                            
                          </ul>
                    </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#advancedUI" role="button" aria-expanded="false" aria-controls="advancedUI">
                  <i class="link-icon" data-feather="anchor"></i>
                  <span class="link-title">Advanced UI</span>
                  <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="advancedUI">
                  <ul class="nav sub-menu">
                    <li class="nav-item">
                      <a href="pages/advanced-ui/cropper.html" class="nav-link">Cropper</a>
                    </li>
                    <li class="nav-item">
                      <a href="pages/advanced-ui/owl-carousel.html" class="nav-link">Owl carousel</a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item nav-category">Property</li>
              <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="collapse" href="#condo" role="button" aria-expanded="false" aria-controls="condo">
                    <i class="link-icon" data-feather="home"></i>
                    <span class="link-title">Condo</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                  </a>
                    <div class="collapse" id="condo">
                          <ul class="nav sub-menu">
                            <li class="nav-item">
                              <a href="{{ route('all.condo') }}" class="nav-link">All Condo</a>
                            </li>
                            <li class="nav-item">
                              <a href="{{ route('add.condo') }}" class="nav-link">Add Condo</a>
                            
                          </ul>
                    </div>
              </li>
              <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="collapse" href="#apartment" role="button" aria-expanded="false" aria-controls="apartment">
                    <i class="link-icon" data-feather="home"></i>
                    <span class="link-title">Apartment</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                  </a>
                    <div class="collapse" id="apartment">
                          <ul class="nav sub-menu">
                            <li class="nav-item">
                              <a href="{{ route('all.apartment') }}" class="nav-link">All Apartment</a>
                            </li>
                            <li class="nav-item">
                              <a href="{{ route('add.apartment') }}" class="nav-link">Add Apartment</a>
                            
                          </ul>
                    </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#advancedUI" role="button" aria-expanded="false" aria-controls="advancedUI">
                  <i class="link-icon" data-feather="anchor"></i>
                  <span class="link-title">Advanced UI</span>
                  <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="advancedUI">
                  <ul class="nav sub-menu">
                    <li class="nav-item">
                      <a href="pages/advanced-ui/cropper.html" class="nav-link">Cropper</a>
                    </li>
                    <li class="nav-item">
                      <a href="pages/advanced-ui/owl-carousel.html" class="nav-link">Owl carousel</a>
                    </li>
                  </ul>
                </div>
              </li>
          
          <li class="nav-item nav-category">Docs</li>
            <li class="nav-item">
              <a href="#" target="_blank" class="nav-link">
                <i class="link-icon" data-feather="hash"></i>
                <span class="link-title">Documentation</span>
              </a>
            </li>
        </ul>
      </div>
    </nav>