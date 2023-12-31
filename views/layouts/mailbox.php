<div class="app-container">
        <div class="search">
            <form>
                <input class="form-control" type="text" placeholder="Type here..." aria-label="Search">
            </form>
            <a href="#" class="toggle-search"><i class="material-icons">close</i></a>
        </div>
        <div class="app-header">
            <nav class="navbar navbar-light navbar-expand-lg">
                <div class="container-fluid">
                    <div class="navbar-nav" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link hide-sidebar-toggle-button" href="#"><i
                                        class="material-icons">first_page</i></a>
                            </li>
                            <li class="nav-item dropdown hidden-on-mobile">
                                <a class="nav-link dropdown-toggle" href="#" id="addDropdownLink" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="material-icons">add</i>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="addDropdownLink">
                                    <li><a class="dropdown-item" href="#">New Workspace</a></li>
                                    <li><a class="dropdown-item" href="#">New Board</a></li>
                                    <li><a class="dropdown-item" href="#">Create Project</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown hidden-on-mobile">
                                <a class="nav-link dropdown-toggle" href="#" id="exploreDropdownLink" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="material-icons-outlined">explore</i>
                                </a>
                                <ul class="dropdown-menu dropdown-lg large-items-menu"
                                    aria-labelledby="exploreDropdownLink">
                                    <li>
                                        <h6 class="dropdown-header">Repositories</h6>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <h5 class="dropdown-item-title">
                                                Neptune iOS
                                                <span class="badge badge-warning">1.0.2</span>
                                                <span class="hidden-helper-text">switch<i
                                                        class="material-icons">keyboard_arrow_right</i></span>
                                            </h5>
                                            <span class="dropdown-item-description">Lorem Ipsum is simply dummy text of
                                                the printing and typesetting industry.</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <h5 class="dropdown-item-title">
                                                Neptune Android
                                                <span class="badge badge-info">dev</span>
                                                <span class="hidden-helper-text">switch<i
                                                        class="material-icons">keyboard_arrow_right</i></span>
                                            </h5>
                                            <span class="dropdown-item-description">Lorem Ipsum is simply dummy text of
                                                the printing and typesetting industry.</span>
                                        </a>
                                    </li>
                                    <li class="dropdown-btn-item d-grid">
                                        <button class="btn btn-primary">Create new repository</button>
                                    </li>
                                </ul>
                            </li>
                        </ul>

                    </div>
                    <div class="d-flex">
                        <ul class="navbar-nav">
                            <li class="nav-item hidden-on-mobile">
                                <a class="nav-link active" href="#">Applications</a>
                            </li>
                            <li class="nav-item hidden-on-mobile">
                                <a class="nav-link" href="#">Reports</a>
                            </li>
                            <li class="nav-item hidden-on-mobile">
                                <a class="nav-link" href="#">Projects</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link toggle-search" href="#"><i class="material-icons">search</i></a>
                            </li>
                            <li class="nav-item hidden-on-mobile">
                                <a class="nav-link language-dropdown-toggle" href="#" id="languageDropDown"
                                    data-bs-toggle="dropdown"><img src="views/assets/images/flags/us.png" alt=""></a>
                                <ul class="dropdown-menu dropdown-menu-end language-dropdown"
                                    aria-labelledby="languageDropDown">
                                    <li><a class="dropdown-item" href="#"><img
                                                src="views/assets/images/flags/germany.png" alt="">German</a></li>
                                    <li><a class="dropdown-item" href="#"><img src="views/assets/images/flags/italy.png"
                                                alt="">Italian</a></li>
                                    <li><a class="dropdown-item" href="#"><img src="views/assets/images/flags/china.png"
                                                alt="">Chinese</a></li>
                                </ul>
                            </li>
                            <li class="nav-item hidden-on-mobile">
                                <a class="nav-link nav-notifications-toggle" id="notificationsDropDown" href="#"
                                    data-bs-toggle="dropdown">4</a>
                                <div class="dropdown-menu dropdown-menu-end notifications-dropdown"
                                    aria-labelledby="notificationsDropDown">
                                    <h6 class="dropdown-header">Notifications</h6>
                                    <div class="notifications-dropdown-list">
                                        <a href="#">
                                            <div class="notifications-dropdown-item">
                                                <div class="notifications-dropdown-item-image">
                                                    <span class="notifications-badge bg-info text-white">
                                                        <i class="material-icons-outlined">campaign</i>
                                                    </span>
                                                </div>
                                                <div class="notifications-dropdown-item-text">
                                                    <p class="bold-notifications-text">Donec tempus nisi sed erat
                                                        vestibulum, eu suscipit ex laoreet</p>
                                                    <small>19:00</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="notifications-dropdown-item">
                                                <div class="notifications-dropdown-item-image">
                                                    <span class="notifications-badge bg-danger text-white">
                                                        <i class="material-icons-outlined">bolt</i>
                                                    </span>
                                                </div>
                                                <div class="notifications-dropdown-item-text">
                                                    <p class="bold-notifications-text">Quisque ligula dui, tincidunt nec
                                                        pharetra eu, fringilla quis mauris</p>
                                                    <small>18:00</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="notifications-dropdown-item">
                                                <div class="notifications-dropdown-item-image">
                                                    <span class="notifications-badge bg-success text-white">
                                                        <i class="material-icons-outlined">alternate_email</i>
                                                    </span>
                                                </div>
                                                <div class="notifications-dropdown-item-text">
                                                    <p>Nulla id libero mattis justo euismod congue in et metus</p>
                                                    <small>yesterday</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="notifications-dropdown-item">
                                                <div class="notifications-dropdown-item-image">
                                                    <span class="notifications-badge">
                                                        <img src="views/assets/images/avatars/avatar1.jpg" alt="">
                                                    </span>
                                                </div>
                                                <div class="notifications-dropdown-item-text">
                                                    <p>Praesent sodales lobortis velit ac pellentesque</p>
                                                    <small>yesterday</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="notifications-dropdown-item">
                                                <div class="notifications-dropdown-item-image">
                                                    <span class="notifications-badge">
                                                        <img src="views/assets/images/avatars/avatar7.jpg" alt="">
                                                    </span>
                                                </div>
                                                <div class="notifications-dropdown-item-text">
                                                    <p>Praesent lacinia ante eget tristique mattis. Nam sollicitudin
                                                        velit sit amet auctor porta</p>
                                                    <small>yesterday</small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="app-content">
            <div class="content-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col">
                            <div class="mailbox-container">

                                <div class="modal fade" id="composeModal" tabindex="-1"
                                    aria-labelledby="composeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="composeModalLabel">Compose Message</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form>
                                                    <label for="composeEmailTo" class="form-label">Email address</label>
                                                    <input type="email" class="form-control m-b-sm" id="composeEmailTo"
                                                        aria-describedby="emailHelp">
                                                    <label for="composeTitle" class="form-label">Subject</label>
                                                    <input type="text" class="form-control m-b-lg" id="composeTitle"
                                                        aria-describedby="title">
                                                    <div id="compose-editor"></div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light"
                                                    data-bs-dismiss="modal">Cancel</button>
                                                <button type="button" class="btn btn-success">Send</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-primary btn-burger mailbox-compose-btn"
                                    data-bs-toggle="modal" data-bs-target="#composeModal"><i
                                        class="material-icons-outlined">create</i></button>
                                <div class="card">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="mailbox-list col-xl-3">
                                                <ul class="list-unstyled">
                                                    <li class="mailbox-list-item">
                                                        <a href="#">
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="">
                                                            </div>
                                                            <img src="views/assets/images/avatars/avatar2.png" alt="">
                                                            <div class="mailbox-list-item-content">
                                                                <span class="mailbox-list-item-title">
                                                                    Oskar Hudson
                                                                </span>
                                                                <p class="mailbox-list-item-text">
                                                                    Aliquam eget lectus viverra, maximus massa nec,
                                                                    ultricies tellus. Morbi non massa urna. Lorem ipsum
                                                                    dolor sit amet, consectetur adipiscing elit
                                                                </p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="mailbox-list-item">
                                                        <a href="#">
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="">
                                                            </div>
                                                            <img src="views/assets/images/avatars/avatar3.jpg" alt="">
                                                            <div class="mailbox-list-item-content">
                                                                <span class="mailbox-list-item-title">
                                                                    Woodrow Hawkins
                                                                </span>
                                                                <p class="mailbox-list-item-text">
                                                                    Nunc a mauris vel magna pharetra tempor mollis quis
                                                                    risus. Nullam vitae lorem eget ligula euismod cursus
                                                                    at sed dui
                                                                </p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="mailbox-list-item">
                                                        <a href="#">
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="">
                                                            </div>
                                                            <img src="views/assets/images/avatars/avatar1.jpg" alt="">
                                                            <div class="mailbox-list-item-content">
                                                                <span class="mailbox-list-item-title">
                                                                    Sky Meyers
                                                                </span>
                                                                <p class="mailbox-list-item-text">
                                                                    Phasellus vel turpis quis velit maximus sodales. Nam
                                                                    ultrices justo non odio bibendum tincidunt
                                                                </p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="mailbox-list-item">
                                                        <a href="#">
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="">
                                                            </div>
                                                            <img src="views/assets/images/avatars/avatar4.png" alt="">
                                                            <div class="mailbox-list-item-content">
                                                                <span class="mailbox-list-item-title">
                                                                    Josh Owen
                                                                </span>
                                                                <p class="mailbox-list-item-text">
                                                                    Vestibulum ante ipsum primis in faucibus orci luctus
                                                                    et ultrices posuere cubilia curae
                                                                </p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="mailbox-list-item active">
                                                        <a href="#">
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="">
                                                            </div>
                                                            <img src="views/assets/images/avatars/avatar6.jpg" alt="">
                                                            <div class="mailbox-list-item-content">
                                                                <span class="mailbox-list-item-title">
                                                                    Dianna Fox
                                                                </span>
                                                                <p class="mailbox-list-item-text">
                                                                    Quisque quis sapien ac risus consectetur luctus ut
                                                                    et ipsum. Nullam pretium venenatis nibh a dictum.
                                                                    Donec orci lorem, mollis vitae quam sit amet,
                                                                    pellentesque imperdiet velit
                                                                </p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="mailbox-list-item">
                                                        <a href="#">
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="">
                                                            </div>
                                                            <img src="views/assets/images/avatars/avatar7.jpg" alt="">
                                                            <div class="mailbox-list-item-content">
                                                                <span class="mailbox-list-item-title">
                                                                    Miriam Bell
                                                                </span>
                                                                <p class="mailbox-list-item-text">
                                                                    Etiam fringilla ante scelerisque, egestas erat
                                                                    vitae, hendrerit sapien. Orci varius natoque
                                                                    penatibus et magnis dis parturient montes
                                                                </p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="mailbox-list-item">
                                                        <a href="#">
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="">
                                                            </div>
                                                            <img src="views/assets/images/avatars/avatar8.jpg" alt="">
                                                            <div class="mailbox-list-item-content">
                                                                <span class="mailbox-list-item-title">
                                                                    Mike Gonzalez
                                                                </span>
                                                                <p class="mailbox-list-item-text">
                                                                    Aenean felis magna, hendrerit at convallis vitae,
                                                                    facilisis eget libero. Phasellus eleifend, ligula eu
                                                                    mollis volutpat, risus dolor posuere augue
                                                                </p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="mailbox-list-item">
                                                        <a href="#">
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="">
                                                            </div>
                                                            <img src="views/assets/images/avatars/avatar9.jpg" alt="">
                                                            <div class="mailbox-list-item-content">
                                                                <span class="mailbox-list-item-title">
                                                                    Ricky Fernandez
                                                                </span>
                                                                <p class="mailbox-list-item-text">
                                                                    Nulla volutpat iaculis turpis, vitae dignissim enim.
                                                                    Ut consequat pretium tellus, quis pretium nisi
                                                                </p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="mailbox-list-item">
                                                        <a href="#">
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="">
                                                            </div>
                                                            <img src="views/assets/images/avatars/avatar6.jpg" alt="">
                                                            <div class="mailbox-list-item-content">
                                                                <span class="mailbox-list-item-title">
                                                                    Sonia Lee
                                                                </span>
                                                                <p class="mailbox-list-item-text">
                                                                    Sed sed erat nec tellus mattis efficitur ac id nunc.
                                                                    Vestibulum ante ipsum primis in faucibus orci luctus
                                                                    et
                                                                </p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="mailbox-open-content col-xl-9">
                                                <span class="mailbox-open-date">Jul 9, 2021, 9:07 AM</span>
                                                <h5 class="mailbox-open-title">
                                                    Work together with better collaboration tools
                                                </h5>
                                                <div class="mailbox-open-author">
                                                    <img src="views/assets/images/avatars/avatar6.jpg" alt="">
                                                    <div class="mailbox-open-author-info">
                                                        <span
                                                            class="mailbox-open-author-info-email d-block">dianna@gmail.com</span>
                                                        <span class="mailbox-open-author-info-to">To <span
                                                                class="badge badge-info align-self-center">devs</span></span>
                                                    </div>
                                                    <div class="mailbox-open-actions">
                                                        <a href="#" class="btn btn-primary">Forward</a>
                                                        <a href="#" class="btn btn-danger">Delete</a>
                                                    </div>
                                                </div>
                                                <div class="mailbox-open-content-email">
                                                    <p>Vestibulum vitae maximus nisi. Cras vitae ligula metus. Nulla
                                                        quis tortor at felis volutpat tempus ac vel quam. Sed eget nibh
                                                        tortor. Phasellus sit amet pharetra justo, fringilla
                                                        pellentesque nibh. Donec euismod metus nec neque hendrerit, sit
                                                        amet ornare libero ultrices. Vestibulum non massa a massa
                                                        ultrices consectetur. Orci varius natoque penatibus et magnis
                                                        dis parturient montes, nascetur ridiculus mus. Etiam gravida
                                                        rhoncus enim, non eleifend purus malesuada eget. Nunc vitae
                                                        pretium augue. Duis non nisi quis enim accumsan consectetur.
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                        Vestibulum vitae bibendum turpis, eu feugiat enim. Aliquam quis
                                                        mauris eget ipsum faucibus mollis ut tincidunt libero.
                                                        <br><br>sed nulla tristique, imperdiet lorem eget, blandit ante.
                                                        Nam nec rutrum elit, sit amet congue purus. Aliquam tempor
                                                        mauris sed mi efficitur iaculis. Nulla in mauris tristique,
                                                        sollicitudin nulla eget, tincidunt leo. Vestibulum facilisis
                                                        malesuada orci, ac convallis dolor dictum sit amet. Vivamus
                                                        efficitur lobortis nulla, sit amet laoreet massa condimentum
                                                        suscipit. Donec lacinia vel est id luctus. Morbi ultrices
                                                        fringilla facilisis. Donec congue erat lacinia purus maximus
                                                        luctus. Etiam egestas mi sit amet turpis semper, nec feugiat
                                                        urna auctor. Curabitur eu lacus non est porttitor lacinia.
                                                        Suspendisse sit amet eros ut lacus viverra semper quis et
                                                        ligula. Integer luctus massa quis consectetur rutrum. Donec vel
                                                        lorem lacinia, posuere ligula non, lobortis nisl.
                                                    </p>
                                                    <div class="mailbox-open-content-email-attachments">
                                                        <ul class="attachments-files-list list-unstyled">
                                                            <li class="attachments-files-list-item">
                                                                <span class="attachments-files-list-item-icon">
                                                                    <i
                                                                        class="material-icons-outlined">insert_drive_file</i>
                                                                </span>
                                                                <span class="attachments-files-list-item-content">
                                                                    <span
                                                                        class="attachments-files-list-item-title">Invoice.pdf</span>
                                                                    <span class="attachments-files-list-item-size">14
                                                                        MB</span>
                                                                </span>
                                                                <a href="#"
                                                                    class="attachments-files-list-item-download-btn">
                                                                    <i class="material-icons-outlined">
                                                                        download
                                                                    </i>
                                                                </a>
                                                            </li>
                                                            <li class="attachments-files-list-item">
                                                                <span class="attachments-files-list-item-icon">
                                                                    <i class="material-icons-outlined">lock</i>
                                                                </span>
                                                                <span class="attachments-files-list-item-content">
                                                                    <span
                                                                        class="attachments-files-list-item-title">connect_download.zip</span>
                                                                    <span class="attachments-files-list-item-size">95.4
                                                                        MB</span>
                                                                </span>
                                                                <a href="#"
                                                                    class="attachments-files-list-item-download-btn">
                                                                    <i class="material-icons-outlined">
                                                                        download
                                                                    </i>
                                                                </a>
                                                            </li>
                                                            <li class="attachments-files-list-item">
                                                                <span class="attachments-files-list-item-icon">
                                                                    <i class="material-icons-outlined">image</i>
                                                                </span>
                                                                <span class="attachments-files-list-item-content">
                                                                    <span
                                                                        class="attachments-files-list-item-title">welcome.jpeg</span>
                                                                    <span class="attachments-files-list-item-size">46
                                                                        MB</span>
                                                                </span>
                                                                <a href="#"
                                                                    class="attachments-files-list-item-download-btn">
                                                                    <i class="material-icons-outlined">
                                                                        download
                                                                    </i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="mailbox-open-content-reply">
                                                    <div id="reply-editor"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

