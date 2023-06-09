<? include_once ROOT. '/template/header.php'; ?>
	<div class="container my-4">
		<h4 class="my-4">Результати вимірювань</h4>
		<div class="row">
			<div class="col-lg-4 mb-3">
				<div class="card">
					<div class="row g-0">
						<div class="card-body">
							<p class="card-text">Оберіть датчик:</p>
							<form action="">
								<select class="form-select mb-2" aria-label="Default select example">
								  <option selected value="1">1 - DHT11 в 3-102</option>
								  <option value="2">2 - DHT22 в 3-102</option>
								  <option value="3">3 - NTC в 4-34</option>
								  <option value="4">4 - DHT22 в 4-43</option>
								  <option value="5">5 - DHT11 в 4-43</option>
								</select>
								<label for="start-time">Від: </label>
								<input type="date" id="start-time" name="start-time">
								<label for="start-time">До: </label>
								<input type="date" id="stop-time" name="stop-time">
								<button type="submit" class="btn btn-primary mt-3">Показати виміри</button>
							</form>
							<p class="card-text mt-4 mb-2">Поточне значення:</p>
							<p class="card-text">
								<span class="p-2 rounded text-bg-success">17 &deg;C</span> 
								в 10.03.2023 10:00
							</p>
							<p class="card-text border-top"><small class="text-muted">Останнє оновлення інформації: 10.03.2023, 10:00</small></p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-8 mb-3">
				<img class="img-fluid" src="https://via.placeholder.com/800x300" alt="">
			</div>
		</div>
	</div>
	<!-- footer -->
	<div class="bg-secondary">
		<div class="container">
			<footer class="d-flex flex-wrap justify-content-between align-items-center py-3 border-top">
				<p class="col-md-5 mb-0 text-light">&copy; 2023 RTES Department, Chernihiv Polytechnic</p>

				<a href="/" class="col-md-2 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
					<img src="images/logo_bras.png" alt="">
				</a>

				<ul class="nav col-md-5 justify-content-end">
					<li class="nav-item">
						<a href="#" class="nav-link px-2 text-light">
							<i class="bi bi-house"></i> Головна
						</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link px-2 text-light">
							<i class="bi bi-building"></i> Лабораторії
						</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link px-2 text-light">
							<i class="bi bi-card-text"></i> Моделі
						</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link px-2 text-light">
							<i class="bi bi-speedometer"></i> Сенсори</a>
						</li>
					<li class="nav-item">
						<a href="#" class="nav-link px-2 text-light">
							<i class="bi bi-graph-up-arrow"></i> Виміри
						</a>
					</li>
				</ul>
			</footer>
		</div>
	</div>	
</body>
</html>