<?php include("../partials/header.php"); ?>
<section class="page page-developer-dashboard-projects dashboard-page">
	<div class="container">
		<div class="content">

			<div class="row">
				<?php include("../partials/side-menu.php"); ?>

				<main>
					<header class="main-header">
						<div class="vertical-align">
							<div class="middle">
								<i class="icon icon-project"></i>
								<h1 class="header-large">Projects</h1>
							</div>

							<div class="middle last">
								<p class="project-counter"><span>6</span></p>
								<p class="project-counter">Projects</p>
							</div>
						</div>
					</header>

					<?php include("content.php"); ?>
				</main>
			</div>

		</div>
	</div>
</section>

<?php include("../partials/tutorial.php"); ?>

<script type="text/javascript" src="[[js/developer/dashboard/projects-*.js]]"></script>

<?php include("../partials/footer.php"); ?>