 <form method="POST" action="<?= base_url('panel/periode/pages/store'); ?>">  
 <div class="row"> 
  <div class="box box-primary box-solid ">
    <div class="box-header with-border">
      <h3 class="box-title"><i class="fa fa-bank"></i> <?= $modul?></h3>
      <!-- Left -->
      <div class="box-tools pull-right"> 

      </div>
      <!-- End Left --> 
    </div>
    <div class="box-body">
        
      <div class="col-md-12" style="margin-top: 20px;">
         <table class="table table-bordered table-striped"> 
          <tr>
             <td class="bold">Nama Gelombang</td>
             <td >
               <input type="text" name="nama" id="nama" class="form-control" >
             </td>  
             <td class="bold">Status</td>
             <td>
               <select class="form-control select2me" name="status" id="status" required > 
                 <option value="1">Aktif</option>
                 <option value="0">Tidak Aktif</option>
               </select>
             </td> 
           </tr>
           <tr>
             <td class="bold">Mulai Periode</td>
             <td>
                <input type="date" name="start" id="start" class="form-control" value="<?= date_now(); ?>" >
             </td>
             <td class="bold">Akhir Periode</td>
             <td>
               <input type="date" name="finish" id="finish" class="form-control" value="<?= date_now(); ?>" >
             </td>
           </tr>
            
         </table>

         <div class="col-md-12" style="margin-top: 20px;"> 
          <a onclick="window.history.back();" class="btn btn-sm bg-navy" style="border-radius: 0px;"><i class="fa fa-angle-left"></i> Back</a>
          <div class="pull-right">
            <button class="btn btn-sm bg-green" style="border-radius: 0px;"><i class="fa fa-save"></i> Save</button>
          </div> 
      </div>
      </div>
    </div> 
  </div> 
</div> 


 </form>
 