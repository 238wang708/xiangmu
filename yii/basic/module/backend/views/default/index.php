<?php 
?>
<div class="col-sm-12"><table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                <thead>
                <tr role="row"><th class="sorting_desc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column ascending" style="width: 279px;" aria-sort="descending">标题</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 350px;">作者</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 322px;">类型</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 244px;">时间</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 183px;">头像</th></tr>
                   
                 <?php foreach ($data as $key => $v) { ?>
                     <tr>
                          <td><?php echo $v['book']; ?></td>
                          <td><?php echo $v['author']; ?></td>
                          <td><?php echo $v['type']; ?></td>
                          <td><?php echo $v['times']; ?></td>
                          <td><?php echo $v['img']; ?></td>
                     </tr>
                <?php  } ?>






                </thead>
                <tbody>


              </table></div>