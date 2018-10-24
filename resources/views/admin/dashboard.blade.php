@extends('layout.master')
@section('title','dashboard')
<style type="text/css">

</style>
@section('navigation')
    @include('layout.admin-nav')
@endsection
@section('content')
<div class="container-fluid table-responsive">

	<table class="table table-bordered table-responsive-md border-dark mt-5 ">
  <thead class="thead text-white" style="background-color:#5cb85c">
    <tr>
        <th class="text-center" scope="col">Name</th>
        <th class="text-center" scope="col">Major</th>
      <th class="text-center" scope="col">Year</th>
      <th class="text-center" scope="col">Question</th>
      <th class="text-center" scope="col">Date</th>
      <th class="text-center" scope="col">Time</th>
    </tr>
  </thead>

  <tbody class="border border-dark">
    <tr class="table-row">
      <td></td>
      <td></td>
        <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
  </tbody>
</table>
</div>
@endsection
