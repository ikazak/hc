<div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="search_bar dropdown">
                                <span class="search_icon p-3 c-pointer" data-toggle="dropdown">
                                    <i class="mdi mdi-magnify"></i>
                                </span>
                                <div class="dropdown-menu p-0 m-0">
                                    <form>
                                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                                    </form>
                                </div>
                            </div>
                        </div>

                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link" href="#" role="button" onclick="show()">
                                    <i class="mdi mdi-bell"></i>
                                    <div class="pulse-css"></div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" id="showw">
                                    <ul class="list-unstyled" id="notif" style="max-height: 400px;overflow-y:scroll;">
                                    
                                    </ul>
                                    
                                </div>
                            </li>
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" onclick="dropdown()">
                                    <i class="mdi mdi-account"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" id="ddown" style="display: none;">
                                    <a href="./app-profile.html" class="dropdown-item">
                                        <i class="icon-user"></i>
                                        <span class="ml-2">Profile </span>
                                    </a>
                                    <a href="./email-inbox.html" class="dropdown-item">
                                        <i class="icon-envelope-open"></i>
                                        <span class="ml-2">Inbox </span>
                                    </a>
                                    <a  onclick="return confirm('are you sure you want to log out?')" href="/log/loginpage" class="dropdown-item">
                                        <i class="icon-key"></i>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>

        <script>
            function dropdown(){
                var dd = document.getElementById('ddown');
                
                if(dd.style.display == "none"){
                    dd.style.display = "block";
                }
                else{
                    dd.style.display = "none";  
                }
                
                
            }



            function show(){
                var dd = document.getElementById('showw');
                
                if(dd.style.display == "none"){
                    dd.style.display = "block";
                }
                else{
                    dd.style.display = "none";  
                }
                
                
            }
        </script>

        <?=jspost_script()?>

        <script>
            window_loaded(async()=>{
                let result = await direct_get("/Crud/displayrequest");
                let data = result.backend.data;
                data.forEach(column => {
                    add_html("notif",`<li class="media dropdown-item">
                                            <span class="success"><i class="ti-user"></i></span>
                                            <div class="media-body">
                                                    <b>${column.fullname}</b>
                                                    <div>${column.serviceType}</div>
                                                    <div><small>${column.scheduleDate}</small></div>
                                            </div>
                                            <a style="cursor: pointer;" onclick="aprove(${column.serviceID},${column.patientID},'${column.fullname}')">approve</a>
                                        </li>`)
                });
            });
        </script>

        <script>
            function aprove(servicesID,patiendID,name){
                let data = {
                    "patientID":patiendID,
                    "servicesID":servicesID,
                };
                let result = jspost(`/crud/approved?name=${name}`,data);
    
                alert(result.backend.message);

            }
        </script>