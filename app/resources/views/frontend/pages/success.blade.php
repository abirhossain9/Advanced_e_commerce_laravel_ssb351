
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="images/favicon.png" rel="icon" />
<title>Shikhbe Shobai</title>
<meta name="author" content="harnishdesign.net">

<!-- Web Fonts
======================= -->
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900' type='text/css'>

<!-- Stylesheet
======================= -->
<link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/bootstrap.min.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/all.min.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/stylesheet.css')}}"/>
</head>
<body>
<!-- Container -->
<div class="container-fluid invoice-container">
  <!-- Header -->
  <header>
  <div class="row align-items-center">
    <div class="col-sm-7 text-center text-sm-start mb-3 mb-sm-0">
      <img id="logo" src="images/logo.png" title="Koice" alt="Koice" />
    </div>
    <div class="col-sm-5 text-center text-sm-end">
      <h4 class="text-7 mb-0">Invoice</h4>
    </div>
  </div>
  <hr>
  </header>

  <!-- Main Content -->
  <main>
  <div class="row">
    <div class="col-sm-6"><strong>Date:</strong> 05/12/2020</div>
    <div class="col-sm-6 text-sm-end"> <strong>Invoice No:</strong> 16835</div>

  </div>
  <hr>
  <div class="row">
    <div class="col-sm-6 text-sm-end order-sm-1"> <strong>Pay To:</strong>
      <address>
      {{ $user->name }}<br />
      {{ $order_detials->address }}<br />
	  {{ $user->email }}
      </address>
    </div>
    <div class="col-sm-6 order-sm-0"> <strong>Invoiced To:</strong>
      <address>
      {{ $user->name }}<br />
      {{ $order_detials->address }}<br />
      </address>
    </div>
  </div>

  <div class="card">
    <div class="card-body p-0">
      <div class="table-responsive">
        <table class="table mb-0">
		<thead class="card-header">
          <tr>
            <td class="col-3"><strong>Course Name</strong></td>
			<td class="col-4"><strong>Batch Name</strong></td>

          </tr>
        </thead>
          <tbody>
            <tr>
              <td class="col-3">{{ $course->english_title }}</td>
              <td class="col-4 text-1">{{ $course->batch_name }}</td>
            </tr>
          </tbody>
		  <tfoot class="card-footer">
			<tr>
              <td colspan="4" class="text-end border-bottom-0"><strong>Total:</strong></td>
              <td class="text-end border-bottom-0">{{ $order_detials->amount }}</td>
            </tr>
		  </tfoot>
        </table>
      </div>
    </div>
  </div>
  </main>
  <!-- Footer -->
  <footer class="text-center mt-4">
  <p class="text-1"><strong>NOTE :</strong> This is computer generated receipt and does not require physical signature.</p>
  <div class="btn-group btn-group-sm d-print-none"> <a href="javascript:window.print()" class="btn btn-light border text-black-50 shadow-none"><i class="fa fa-print"></i> Print</a> <a href="" class="btn btn-light border text-black-50 shadow-none"><i class="fa fa-download"></i> Download</a> </div>
  </footer>
</div>
</body>
</html>
