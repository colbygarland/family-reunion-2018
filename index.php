<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <title>Family Reunion 2018</title>

  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <link href="css/spinner.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">

</head>
<body id="top">

<div class="spinner">
  <div class="rect1"></div>
  <div class="rect2"></div>
  <div class="rect3"></div>
  <div class="rect4"></div>
  <div class="rect5"></div>
</div>

<input type="checkbox" id="nav-trigger" class="nav-trigger" />
<label for="nav-trigger" onclick aria-label="Toggle Navigation" class="menubtn left"><strong>Menu</strong><span></span></label>

<ul class="mobile-menu">
  <li class="current_page_item"><a href="#top">Home</a></li>
  <li><a href="#chart">View Standings</a></li>
  <li><a href="#team">Add Team</a></li>
  <li><a href="#comments">Comments/Concerns</a></li>
</ul>

<div class="site-wrap">

  <header class="main">
    <div class="container">
      <h1>Rehaume Family Reunion 2018</h1>
    </div>
  </header>

  <article class="main">

    <section class="content" id="chart">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">

            <h2>Team Standings</h2>
            <table class="table table-hover footable">
              <thead>
                <tr>
                  <th>Place</th>
                  <th>Team Name</th>
                  <th data-breakpoints="sm">Team Members</th>
                  <th data-breakpoints="sm">Points</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Name Example</td>
                  <td>
                    <table class="table table-hover  inner-table">
                      <thead>
                        <tr>
                          <th>Name</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Colby Garland</td>
                        </tr>
                        <tr>
                          <td>Robyn Garland</td>
                        </tr>
                        <tr>
                          <td>Colby Garland</td>
                        </tr>
                        <tr>
                          <td>Robyn Garland</td>
                        </tr>
                        <tr>
                          <td>Colby Garland</td>
                        </tr>
                        <tr>
                          <td>Robyn Garland</td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                  <td>200</td>
                </tr>
              </tbody>
            </table>
            <div id="team">
              <button id="add-team" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Add Team</button>
            </div>

          </div>
        </div>
      </div>
    </section>

    <section class="content white-bg" id="feedback">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">

            <h2>Feedback</h2>
            <p>Think we could do anything better? Favourite part of the weekend? We would love to hear from you!</p>
            <form class="form feedback-form">
              <div class="form-group">
                <div class="row">
                  <div class="col-md-4">
                    <input type="text" class="form-control" placeholder="Name" name="name" required>
                  </div>
                  <div class="col-md-4">
                    <input type="email" class="form-control" placeholder="Email" name="email">
                  </div>
                  <div class="col-md-4">
                    <input type="phone" class="form-control" placeholder="Phone Number" name="phone">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <textarea required class="form-control" name="description" placeholder="Feedback, comments, concerns, etc."></textarea>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>

          </div>
        </div>
      </div>
    </section>

  </article>

  <footer class="main">
    <div class="container">
      <p>Rehaume Family Reunion 2018</p>
    </div>
  </footer>

</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Team</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="form team-form">
          <div class="form-group">
            <h3>Team Name</h3>
            <input type="text" class="form-control" name="team-name" placeholder="Enter Team Name">
          </div>
          <div class="form-group">
            <h3>Team Members</h3>
            <div class="team-members">
              <div class="team-member">
                <div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder="Enter Team Member">
                  <div class="input-group-append">
                    <button class="btn btn-danger remove-team-member" type="button"><i class="fa fa-times"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <div class="btn-group">
              <button class="btn btn-secondary team-member-dup"><i class="fa fa-plus"></i> Add Team Member</button>
            </div>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary">Save Team</button>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script src="js/inc/jquery-3.1.1.min.js"></script>
<script src="js/inc/moment.js"></script>
<script src="js/inc/bootstrap.min.js"></script>
<script src="js/inc/footable.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>