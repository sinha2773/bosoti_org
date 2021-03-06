<div class="col-sm-12 col-md-8 col-md-offset-2" style="background: #fff; padding-top: 10px;">

    <table class="table">
        <tr>
            <td>
                <?php $media = $this->master->get_image($data->media_id,"member"); ?>
                <img id="reader_image" src="<?php echo $media->src;?>" width="100" height="100"/>
            </td>
            <td>
                <table class="table">
                    <tr>
                        <td>Member ID:</td>
                        <td><?php echo $data->client_id;?></td>
                    </tr> 
                    <tr>
                        <td>Name:</td>
                        <td><?php echo $data->name;?></td>
                    </tr> 
                    <tr>
                        <td>Mobile:</td>
                        <td><?php echo $data->mobile;?></td>
                    </tr>   
                    <tr>
                        <td>Father name:</td>
                        <td><?php echo $data->fathername;?></td>
                    </tr> 
                    <tr>
                        <td>Mother name:</td>
                        <td><?php echo $data->mothername;?></td>
                    </tr> 
                    <tr>
                        <td>Husband/Wife name:</td>
                        <td><?php echo $data->spousename;?></td>
                    </tr> 
                    <tr>
                        <td>Date of Birth:</td>
                        <td><?php echo $data->date_of_birth;?></td>
                    </tr> 
                    <tr>
                        <td>National ID Card Number:</td>
                        <td><?php echo $data->nid;?></td>
                    </tr> 
                    <tr>
                        <td>Occupation:</td>
                        <td><?php echo $data->occupation;?></td>
                    </tr>
                    <tr>
                        <td>Educational Qualification:</td>
                        <td><?php echo $data->education;?></td>
                    </tr>
                    <tr>
                        <td>Religion:</td>
                        <td><?php echo $data->religion;?></td>
                    </tr>
                    <tr>
                        <td>Nationality:</td>
                        <td><?php echo $data->nationality;?></td>
                    </tr>
                    <tr>
                        <td>Blood Group:</td>
                        <td><?php echo $data->blood_group;?></td>
                    </tr>
                    <tr>
                        <td>Admission Date:</td>
                        <td><?php echo $data->admission_date;?></td>
                    </tr>                
                </table>
            </td>
        </tr>
    </table>
    

    <h3>Permanent Address: </h3>
    <table class="table">
        <tr>
            <td>Village:</td>
            <td><?php echo $data->village;?></td>
            <td>Post Office:</td>
            <td><?php echo $data->post_office;?></td>
        </tr>
        <tr>
            <td>Police station:</td>
            <td><?php echo $data->police_station;?></td>
            <td>District:</td>
            <td><?php echo $data->district;?></td>
        </tr>
    </table>

    <h3>Present Address: </h3>
    <table class="table">
        <tr>
            <td>Village:</td>
            <td><?php echo $data->p_village;?></td>
            <td>Post Office:</td>
            <td><?php echo $data->p_post_office;?></td>
        </tr>
        <tr>
            <td>Police station:</td>
            <td><?php echo $data->p_police_station;?></td>
            <td>District:</td>
            <td><?php echo $data->p_district;?></td>
        </tr>
    </table>


    <hr>
    <div class="nominee_section" style="margin-top: 20px;">
        <h3>Nominee identity:</h3>
        <table class="table">
            <tr>
                <td>
                    <?php $media = $this->master->get_image($data->media_id2,"member"); ?>
                    <img id="reader_image" src="<?php echo $media->src;?>" width="100" height="100"/>
                </td>
                <td>
                    <table class="table">

                        <tr>
                            <td>Name:</td>
                            <td><?php echo $data->n_name;?></td>
                        </tr>  
                        <tr>
                            <td>Father name:</td>
                            <td><?php echo $data->n_fathername;?></td>
                        </tr> 
                        <tr>
                            <td>Mother name:</td>
                            <td><?php echo $data->n_mothername;?></td>
                        </tr> 
                        <tr>
                            <td>Date of Birth:</td>
                            <td><?php echo $data->n_date_of_birth;?></td>
                        </tr> 
                        <tr>
                            <td>National ID Card Number:</td>
                            <td><?php echo $data->n_nid;?></td>
                        </tr> 
                        <tr>
                            <td>Nominee relationship:</td>
                            <td><?php echo $data->nominee_relationship;?></td>
                        </tr>            
                    </table>
                </td>
            </tr>
        </table>

        <h3>Permanent Address: </h3>
        <table class="table">
            <tr>
                <td>Village:</td>
                <td><?php echo $data->n_village;?></td>
                <td>Post Office:</td>
                <td><?php echo $data->n_post_office;?></td>
            </tr>
            <tr>
                <td>Police station:</td>
                <td><?php echo $data->n_police_station;?></td>
                <td>District:</td>
                <td><?php echo $data->n_district;?></td>
            </tr>
        </table>

        <h3>Present Address: </h3>
        <table class="table">
            <tr>
                <td>Village:</td>
                <td><?php echo $data->np_village;?></td>
                <td>Post Office:</td>
                <td><?php echo $data->np_post_office;?></td>
            </tr>
            <tr>
                <td>Police station:</td>
                <td><?php echo $data->np_police_station;?></td>
                <td>District:</td>
                <td><?php echo $data->np_district;?></td>
            </tr>
        </table>
    </div>
    <div class="attachment_details">
        <div id="UploadFileContainer">
          <?php if( !empty($data) && !empty($data->attachments) ){ 
            echo '<h4>Attached files</h4>';
            $files = json_decode($data->attachments);
            if( !empty($files) )
            {
            foreach($files as $file_id){
                if( $file_id==0 )
                    continue;
            ?>
              <div class="old_media_container btn btn-default">
                    <?php 
                    $file = $this->media_model->getById($file_id);
                    // dd($file);
                    echo download_file($file->media_type, $file->image, $image_size='full', '', ['target'=>'_blank']);
                    ?>
              </div>
            <?php 
                }
            }
            }
            ?>
        </div>
    </div>

    <hr>
    <div class="reference_section" style="margin-top: 20px;">
        <h3>Reference Identity:</h3>
        <?php if (empty($ref_data)) { ?>
        <p>No Reference Avaialbe</p>
        <?php } else {?>
        <table class="table">
            <tr>
                <td>
                    <table class="table">

                        <tr>
                            <td>Name:</td>
                            <td><?php echo $ref_data->name;?></td>
                        </tr>  
                        <tr>
                            <td>Father name:</td>
                            <td><?php echo $ref_data->fathername;?></td>
                        </tr> 
                        <tr>
                            <td>Mother name:</td>
                            <td><?php echo $ref_data->mothername;?></td>
                        </tr> 
                        <tr>
                            <td>Date of Birth:</td>
                            <td><?php echo $ref_data->date_of_birth;?></td>
                        </tr> 
                        <tr>
                            <td>National ID Card Number:</td>
                            <td><?php echo $ref_data->nid;?></td>
                        </tr>           
                    </table>
                </td>
            </tr>
        </table>

        <h3>Reference Permanent Address: </h3>
        <table class="table">
            <tr>
                <td>Village:</td>
                <td><?php echo $ref_data->village;?></td>
                <td>Post Office:</td>
                <td><?php echo $ref_data->post_office;?></td>
            </tr>
            <tr>
                <td>Police station:</td>
                <td><?php echo $ref_data->police_station;?></td>
                <td>District:</td>
                <td><?php echo $ref_data->district;?></td>
            </tr>
        </table>

        <h3>Reference Present Address: </h3>
        <table class="table">
            <tr>
                <td>Village:</td>
                <td><?php echo $ref_data->p_village;?></td>
                <td>Post Office:</td>
                <td><?php echo $ref_data->p_post_office;?></td>
            </tr>
            <tr>
                <td>Police station:</td>
                <td><?php echo $ref_data->p_police_station;?></td>
                <td>District:</td>
                <td><?php echo $ref_data->p_district;?></td>
            </tr>
        </table>       

        <?php } ?>

        <div class="attachment_details">
            <div id="UploadFileContainer">
              <?php if( !empty($ref_data) && !empty($ref_data->attachments) ){ 
                echo '<h4>Attached files</h4>';
                $files = json_decode($ref_data->attachments);
                if( !empty($files) )
                {
                foreach($files as $file_id){
                    if( $file_id==0 )
                        continue;
                ?>
                  <div class="old_media_container btn btn-default">
                        <?php 
                        $file = $this->media_model->getById($file_id);
                        // dd($file);
                        echo download_file($file->media_type, $file->image, $image_size='full', '', ['target'=>'_blank']);
                        ?>
                  </div>
                <?php 
                    }
                }
                }
                ?>
            </div>
        </div>

        
    </div>

</div>
