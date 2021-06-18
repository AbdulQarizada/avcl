<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="card ">
            <div class="card-header py-2">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="fs-17 font-weight-600 mb-0"><?php echo lan('category_list')?></h6>
                                </div>
                                <div class="text-right">
                                  <?php if($permission->method('add_category','create')->access()){?>  
                                   <a href="<?php echo base_url('medicine/add_category')?>" class="btn btn-success btn-sm mr-1"><i class="fas fa-plus mr-1"></i><?php echo lan('add_category')?></a>
                                 <?php }?>
                                 
                                </div>
                            </div>
                        </div>
            <div class="card-body">

                <div class="table-responsive">
                    <table class="table display table-bordered table-striped table-hover custom-table" id="example">
                        <thead>
                            <tr>
                            <th><?php echo lan('sl_no') ?></th>
                            <th><?php echo lan('category_name') ?></th>
                            <th><?php echo lan('status') ?></th>
                            <th><?php echo lan('action') ?>
                              
                            </tr>
                        </thead>
                        <tbody>
                          <?php
                          $sl = 1;
                           if($category_list){?>
                            <?php foreach($category_list as $categories){?>
                            <tr>
                              <td><?php echo $sl;?></td>
                              <td><?php echo $categories->category_name;?></td>
                              <td><?php echo ($categories->status==1?'Active':'Inactive');?></td>
                              <td>
                                 <?php if($permission->method('category_list','update')->access()){?>  
                                <a href="<?php echo base_url().'/medicine/edit_category/'.$categories->category_id?>" class="btn btn-success-soft btn-sm" data-toggle="tooltip" data-placement="left" title="Update"><i class="fas fa-edit" aria-hidden="true"></i></a>
                              <?php }?>
                               <?php if($permission->method('category_list','delete')->access()){?> 
                               <a href="<?php echo base_url().'/medicine/delete_category/'.$categories->category_id?>" onclick="return confirm('Are You Sure?')" class="btn btn-danger-soft btn-sm" data-toggle="tooltip" data-placement="left" title="Delete"><i class="far fa-trash-alt" aria-hidden="true"></i></a>
                             <?php }?>
                              </td>
                            </tr>
                          <?php $sl++;}?>
                          <?php }else{?>
                   <tr><td colspan="4" class="text-center"><b>No Data Found</b></td></tr>
                          <?php }?>
                        </tbody>
                         
                    </table>
                    
                </div>
            </div> 
        </div>
    </div>
</div>

  