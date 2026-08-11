  <section class="page-header">
            <div class="page-title">
               <div class="page-title-icon">
                  <i id="pageIcon" class="fa-solid fa-chart-pie"></i>
               </div>

               <div>
                  <div class="page-kicker">ADMIN PANEL</div>

                  <h4 id="pageTitle">Dashboard</h4>

                  <p id="pageDescription">Overview of your system</p>
               </div>
            </div>

            <div class="breadcrumb-wrapper">
               <span class="breadcrumb-home">
                  <i class="fa-solid fa-house"></i>
               </span>

               <span class="mx-2 text-muted"> / </span>

               <span id="breadcrumbTitle"> Dashboard </span>
            </div>
         </section>
         <div class="content">
            <!-- =================================================
             STATS
        ================================================== -->

            <div class="row g-3 mb-4">
               <!-- TOTAL -->

               <div class="col-6 col-xl-3">
                  <div class="stat-card">
                     <div class="stat-top">
                        <div class="stat-icon icon-purple">
                           <i class="fa-solid fa-users"></i>
                        </div>

                        <i class="fa-solid fa-ellipsis text-muted"></i>
                     </div>

                     <div class="stat-title">Total Users</div>

                     <div class="stat-number">12,580</div>

                     <div class="stat-change">
                        <i class="fa-solid fa-arrow-up"></i>

                        8.2% this month
                     </div>
                  </div>
               </div>

               <!-- ACTIVE -->

               <div class="col-6 col-xl-3">
                  <div class="stat-card">
                     <div class="stat-top">
                        <div class="stat-icon icon-green">
                           <i class="fa-solid fa-user-check"></i>
                        </div>

                        <i class="fa-solid fa-ellipsis text-muted"></i>
                     </div>

                     <div class="stat-title">Active Users</div>

                     <div class="stat-number">9,842</div>

                     <div class="stat-change">
                        <i class="fa-solid fa-arrow-up"></i>

                        5.4% this month
                     </div>
                  </div>
               </div>

               <!-- PENDING -->

               <div class="col-6 col-xl-3">
                  <div class="stat-card">
                     <div class="stat-top">
                        <div class="stat-icon icon-orange">
                           <i class="fa-solid fa-user-clock"></i>
                        </div>

                        <i class="fa-solid fa-ellipsis text-muted"></i>
                     </div>

                     <div class="stat-title">Pending Users</div>

                     <div class="stat-number">1,248</div>

                     <div class="stat-change">
                        <i class="fa-solid fa-arrow-down"></i>

                        2.1% this month
                     </div>
                  </div>
               </div>

               <!-- ADMIN -->

               <div class="col-6 col-xl-3">
                  <div class="stat-card">
                     <div class="stat-top">
                        <div class="stat-icon icon-blue">
                           <i class="fa-solid fa-user-shield"></i>
                        </div>

                        <i class="fa-solid fa-ellipsis text-muted"></i>
                     </div>

                     <div class="stat-title">Administrators</div>

                     <div class="stat-number">48</div>

                     <div class="stat-change">
                        <i class="fa-solid fa-arrow-up"></i>

                        3 new admins
                     </div>
                  </div>
               </div>
            </div>

            <!-- =================================================
             USER LIST
        ================================================== -->

            <div class="panel-card mb-4" id="userListSection">
               <div class="panel-header">
                  <div class="panel-title-wrap">
                     <div class="panel-title-icon">
                        <i class="fa-solid fa-users"></i>
                     </div>

                     <div>
                        <h5>User List</h5>

                        <p>Manage all registered users</p>
                     </div>
                  </div>

                  <button class="btn btn-primary" onclick="scrollToForm()" type="button">
                     <i class="fa-solid fa-plus me-1"></i>

                     Add User
                  </button>
               </div>

               <div class="panel-body">
                  <!-- =================================================
                     DESKTOP TABLE
                ================================================== -->

                  <div class="table-wrapper desktop-user-table">
                     <table class="modern-table">
                        <thead>
                           <tr>
                              <th>User</th>

                              <th>Role</th>

                              <th>Joined</th>

                              <th>Status</th>

                              <th>Actions</th>
                           </tr>
                        </thead>

                        <tbody>
                           <!-- JOHN -->

                           <tr>
                              <td>
                                 <div class="user-cell">
                                    <div class="user-avatar">JD</div>

                                    <div>
                                       <div class="user-name">John Doe</div>

                                       <div class="user-email">john@example.com</div>
                                    </div>
                                 </div>
                              </td>

                              <td>Administrator</td>

                              <td>Aug 08, 2026</td>

                              <td>
                                 <span class="status status-active"> Active </span>
                              </td>

                              <td>
                                 <button class="action-btn" type="button">
                                    <i class="fa-regular fa-eye"></i>
                                 </button>

                                 <button class="action-btn" type="button">
                                    <i class="fa-regular fa-pen-to-square"></i>
                                 </button>

                                 <button class="action-btn" type="button">
                                    <i class="fa-regular fa-trash-can"></i>
                                 </button>
                              </td>
                           </tr>

                           <!-- SARAH -->

                           <tr>
                              <td>
                                 <div class="user-cell">
                                    <div class="user-avatar">SA</div>

                                    <div>
                                       <div class="user-name">Sarah Ahmed</div>

                                       <div class="user-email">sarah@example.com</div>
                                    </div>
                                 </div>
                              </td>

                              <td>Manager</td>

                              <td>Aug 06, 2026</td>

                              <td>
                                 <span class="status status-active"> Active </span>
                              </td>

                              <td>
                                 <button class="action-btn" type="button">
                                    <i class="fa-regular fa-eye"></i>
                                 </button>

                                 <button class="action-btn" type="button">
                                    <i class="fa-regular fa-pen-to-square"></i>
                                 </button>

                                 <button class="action-btn" type="button">
                                    <i class="fa-regular fa-trash-can"></i>
                                 </button>
                              </td>
                           </tr>

                           <!-- RAHIM -->

                           <tr>
                              <td>
                                 <div class="user-cell">
                                    <div class="user-avatar">RM</div>

                                    <div>
                                       <div class="user-name">Rahim Mia</div>

                                       <div class="user-email">rahim@example.com</div>
                                    </div>
                                 </div>
                              </td>

                              <td>User</td>

                              <td>Aug 05, 2026</td>

                              <td>
                                 <span class="status status-pending"> Pending </span>
                              </td>

                              <td>
                                 <button class="action-btn" type="button">
                                    <i class="fa-regular fa-eye"></i>
                                 </button>

                                 <button class="action-btn" type="button">
                                    <i class="fa-regular fa-pen-to-square"></i>
                                 </button>

                                 <button class="action-btn" type="button">
                                    <i class="fa-regular fa-trash-can"></i>
                                 </button>
                              </td>
                           </tr>

                           <!-- MICHAEL -->

                           <tr>
                              <td>
                                 <div class="user-cell">
                                    <div class="user-avatar">MK</div>

                                    <div>
                                       <div class="user-name">Michael Khan</div>

                                       <div class="user-email">michael@example.com</div>
                                    </div>
                                 </div>
                              </td>

                              <td>User</td>

                              <td>Aug 03, 2026</td>

                              <td>
                                 <span class="status status-blocked"> Blocked </span>
                              </td>

                              <td>
                                 <button class="action-btn" type="button">
                                    <i class="fa-regular fa-eye"></i>
                                 </button>

                                 <button class="action-btn" type="button">
                                    <i class="fa-regular fa-pen-to-square"></i>
                                 </button>

                                 <button class="action-btn" type="button">
                                    <i class="fa-regular fa-trash-can"></i>
                                 </button>
                              </td>
                           </tr>
                        </tbody>
                     </table>
                  </div>

                  <!-- =================================================
                     MOBILE USER LIST
                ================================================== -->

                  <div class="mobile-user-list">
                     <!-- USER 1 -->

                     <div class="mobile-user-card">
                        <div class="mobile-user-top">
                           <div class="mobile-user-info">
                              <div class="mobile-user-avatar">JD</div>

                              <div>
                                 <div class="mobile-user-name">John Doe</div>

                                 <div class="mobile-user-email">john@example.com</div>
                              </div>
                           </div>

                           <span class="status status-active"> Active </span>
                        </div>

                        <div class="mobile-user-details">
                           <div class="mobile-detail">
                              <span class="mobile-detail-label"> Role </span>

                              <span class="mobile-detail-value"> Administrator </span>
                           </div>

                           <div class="mobile-detail">
                              <span class="mobile-detail-label"> Joined </span>

                              <span class="mobile-detail-value"> Aug 08, 2026 </span>
                           </div>
                        </div>

                        <div class="mobile-user-actions">
                           <button class="action-btn" type="button">
                              <i class="fa-regular fa-eye"></i>
                           </button>

                           <button class="action-btn" type="button">
                              <i class="fa-regular fa-pen-to-square"></i>
                           </button>

                           <button class="action-btn" type="button">
                              <i class="fa-regular fa-trash-can"></i>
                           </button>
                        </div>
                     </div>

                     <!-- USER 2 -->

                     <div class="mobile-user-card">
                        <div class="mobile-user-top">
                           <div class="mobile-user-info">
                              <div class="mobile-user-avatar">SA</div>

                              <div>
                                 <div class="mobile-user-name">Sarah Ahmed</div>

                                 <div class="mobile-user-email">sarah@example.com</div>
                              </div>
                           </div>

                           <span class="status status-active"> Active </span>
                        </div>

                        <div class="mobile-user-details">
                           <div class="mobile-detail">
                              <span class="mobile-detail-label"> Role </span>

                              <span class="mobile-detail-value"> Manager </span>
                           </div>

                           <div class="mobile-detail">
                              <span class="mobile-detail-label"> Joined </span>

                              <span class="mobile-detail-value"> Aug 06, 2026 </span>
                           </div>
                        </div>

                        <div class="mobile-user-actions">
                           <button class="action-btn" type="button">
                              <i class="fa-regular fa-eye"></i>
                           </button>

                           <button class="action-btn" type="button">
                              <i class="fa-regular fa-pen-to-square"></i>
                           </button>

                           <button class="action-btn" type="button">
                              <i class="fa-regular fa-trash-can"></i>
                           </button>
                        </div>
                     </div>

                     <!-- USER 3 -->

                     <div class="mobile-user-card">
                        <div class="mobile-user-top">
                           <div class="mobile-user-info">
                              <div class="mobile-user-avatar">RM</div>

                              <div>
                                 <div class="mobile-user-name">Rahim Mia</div>

                                 <div class="mobile-user-email">rahim@example.com</div>
                              </div>
                           </div>

                           <span class="status status-pending"> Pending </span>
                        </div>

                        <div class="mobile-user-details">
                           <div class="mobile-detail">
                              <span class="mobile-detail-label"> Role </span>

                              <span class="mobile-detail-value"> User </span>
                           </div>

                           <div class="mobile-detail">
                              <span class="mobile-detail-label"> Joined </span>

                              <span class="mobile-detail-value"> Aug 05, 2026 </span>
                           </div>
                        </div>

                        <div class="mobile-user-actions">
                           <button class="action-btn" type="button">
                              <i class="fa-regular fa-eye"></i>
                           </button>

                           <button class="action-btn" type="button">
                              <i class="fa-regular fa-pen-to-square"></i>
                           </button>

                           <button class="action-btn" type="button">
                              <i class="fa-regular fa-trash-can"></i>
                           </button>
                        </div>
                     </div>

                     <!-- USER 4 -->

                     <div class="mobile-user-card">
                        <div class="mobile-user-top">
                           <div class="mobile-user-info">
                              <div class="mobile-user-avatar">MK</div>

                              <div>
                                 <div class="mobile-user-name">Michael Khan</div>

                                 <div class="mobile-user-email">michael@example.com</div>
                              </div>
                           </div>

                           <span class="status status-blocked"> Blocked </span>
                        </div>

                        <div class="mobile-user-details">
                           <div class="mobile-detail">
                              <span class="mobile-detail-label"> Role </span>

                              <span class="mobile-detail-value"> User </span>
                           </div>

                           <div class="mobile-detail">
                              <span class="mobile-detail-label"> Joined </span>

                              <span class="mobile-detail-value"> Aug 03, 2026 </span>
                           </div>
                        </div>

                        <div class="mobile-user-actions">
                           <button class="action-btn" type="button">
                              <i class="fa-regular fa-eye"></i>
                           </button>

                           <button class="action-btn" type="button">
                              <i class="fa-regular fa-pen-to-square"></i>
                           </button>

                           <button class="action-btn" type="button">
                              <i class="fa-regular fa-trash-can"></i>
                           </button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

            <!-- =================================================
             ADD USER FORM
        ================================================== -->

            <div class="panel-card" id="addUserForm">
               <div class="panel-body">
                  <!-- FORM HEADER -->

                  <div class="form-section-header">
                     <div class="form-section-title">
                        <div class="form-section-icon">
                           <i class="fa-solid fa-user-plus"></i>
                        </div>

                        <div>
                           <strong> Add New User </strong>

                           <span> Create a new user account </span>
                        </div>
                     </div>

                     <!-- USER LIST LINK -->

                     <a href="#userListSection" class="user-list-link">
                        <i class="fa-solid fa-list me-1"></i>

                        User List
                     </a>
                  </div>

                  <!-- FORM -->

                  <form id="userForm" novalidate>
                     <div class="row g-3">
                        <!-- =================================================
                             FIRST NAME
                        ================================================== -->

                        <div class="col-md-6">
                           <label class="form-label" for="firstName"> First Name </label>

                           <div class="input-group">
                              <span class="input-group-text">
                                 <i class="fa-regular fa-user"></i>
                              </span>

                              <input type="text" class="form-control" id="firstName" placeholder="Enter first name" />
                           </div>

                           <!-- ERROR -->

                           <div id="firstNameError" class="validation-error" style="display: none">
                              <i class="fa-solid fa-circle-exclamation"></i>

                              Please enter your first name.
                           </div>
                        </div>

                        <!-- =================================================
                             LAST NAME
                        ================================================== -->

                        <div class="col-md-6">
                           <label class="form-label" for="lastName"> Last Name </label>

                           <div class="input-group">
                              <span class="input-group-text">
                                 <i class="fa-regular fa-user"></i>
                              </span>

                              <input type="text" class="form-control" id="lastName" placeholder="Enter last name" />
                           </div>
                        </div>

                        <!-- =================================================
                             EMAIL
                        ================================================== -->

                        <div class="col-md-6">
                           <label class="form-label" for="email"> Email Address </label>

                           <div class="input-group">
                              <span class="input-group-text">
                                 <i class="fa-regular fa-envelope"></i>
                              </span>

                              <input type="email" class="form-control" id="email" placeholder="name@example.com" />
                           </div>
                        </div>

                        <!-- =================================================
                             PHONE
                        ================================================== -->

                        <div class="col-md-6">
                           <label class="form-label" for="phone"> Phone Number </label>

                           <div class="input-group">
                              <span class="input-group-text">
                                 <i class="fa-solid fa-phone"></i>
                              </span>

                              <input type="text" class="form-control" id="phone" placeholder="+880 1XXXXXXXXX" />
                           </div>
                        </div>

                        <!-- =================================================
                             ROLE
                        ================================================== -->

                        <div class="col-md-6">
                           <label class="form-label"> User Role </label>

                           <select class="form-select select2" id="role">
                              <option value="">Select Role</option>
                              <option value="admin">Administrator</option>
                              <option value="manager">Manager</option>
                              <option value="editor">Editor</option>
                              <option value="user">User</option>
                           </select>
                        </div>

                        <!-- =================================================
                             STATUS
                        ================================================== -->

                        <div class="col-md-6">
                           <label class="form-label"> Account Status </label>

                           <select class="form-select select2" data-placeholder="Select account status">
                              <option></option>

                              <option>Active</option>

                              <option>Pending</option>

                              <option>Blocked</option>
                           </select>
                        </div>

                        <!-- =================================================
                             PASSWORD
                        ================================================== -->

                        <div class="col-md-6">
                           <label class="form-label"> Password </label>

                           <div class="input-group">
                              <span class="input-group-text">
                                 <i class="fa-solid fa-lock"></i>
                              </span>

                              <input type="password" class="form-control" placeholder="Enter password" />
                           </div>
                        </div>

                        <!-- =================================================
                             CONFIRM PASSWORD
                        ================================================== -->

                        <div class="col-md-6">
                           <label class="form-label"> Confirm Password </label>

                           <div class="input-group">
                              <span class="input-group-text">
                                 <i class="fa-solid fa-lock"></i>
                              </span>

                              <input type="password" class="form-control" placeholder="Confirm password" />
                           </div>
                        </div>

                        <!-- =================================================
                             ADDRESS
                        ================================================== -->

                        <div class="col-12">
                           <label class="form-label"> Address </label>

                           <textarea class="form-control" placeholder="Enter user address"></textarea>
                        </div>

                        <!-- =================================================
                             BUTTONS
                        ================================================== -->

                        <div class="col-12">
                           <div class="d-flex justify-content-end gap-2">
                              <button type="reset" class="btn btn-light-custom">
                                 <i class="fa-solid fa-rotate-left me-1"></i>

                                 Reset
                              </button>

                              <button type="submit" class="btn btn-primary">
                                 <i class="fa-solid fa-check me-1"></i>

                                 Create User
                              </button>
                           </div>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
