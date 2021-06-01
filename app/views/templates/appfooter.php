<footer class="main-footer">
    <div class="footer-left"> Copyright &copy; RD 5 2021
        <div class="bullet"></div> Design By <a href="#">RD 5</a>
    </div>
    <div class="footer-right"></div>
</footer>
</div>
</div>

<script src="<?= BASEURL; ?>/modules/jquery.min.js"></script>
<script src="<?= BASEURL; ?>/modules/popper.js"></script>
<script src="<?= BASEURL; ?>/modules/tooltip.js"></script>
<script src="<?= BASEURL; ?>/modules/bootstrap/js/bootstrap.min.js"></script>
<script src="<?= BASEURL; ?>/modules/nicescroll/jquery.nicescroll.min.js"></script>
<script src="<?= BASEURL; ?>/modules/scroll-up-bar/dist/scroll-up-bar.min.js"></script>
<script src="<?= BASEURL; ?>/js/js_yovie/js/sa-functions.js"></script>
<script src="<?= BASEURL; ?>/modules/chart.min.js"></script>
<script src="<?= BASEURL; ?>/modules/summernote/summernote-lite.js"></script>
<script>
	var ctx = document.getElementById("myChart").getContext('2d');
	var myChart = new Chart(ctx, {
		type: 'line',
		data: {
			labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
			datasets: [{
				label: 'Statistics',
				data: [460, 458, 330, 502, 430, 610, 488],
				borderWidth: 2,
				backgroundColor: 'rgb(87,75,144)',
				borderColor: 'rgb(87,75,144)',
				borderWidth: 2.5,
				pointBackgroundColor: '#ffffff',
				pointRadius: 4
			}]
		},
		options: {
			legend: {
				display: false
			},
			scales: {
				yAxes: [{
					ticks: {
						beginAtZero: true,
						stepSize: 150
					}
				}],
				xAxes: [{
					gridLines: {
						display: false
					}
				}]
			},
		}
	});
</script>
<script src="https://kit.fontawesome.com/9672737e03.js" crossorigin="anonymous"></script>
<script src="<?= BASEURL; ?>/js/js_yovie/js/scripts.js"></script>
<script src="<?= BASEURL; ?>/js/js_yovie/js/custom.js"></script>
<script src="<?= BASEURL; ?>/js/js_yovie/js/demo.js"></script>

<script src="<?= BASEURL; ?>/js/bootstrap.js"></script>
<script src="<?= BASEURL; ?>/js/script.js"></script>

</body>

</html>