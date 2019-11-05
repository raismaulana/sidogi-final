<table class="table tabel-pemeriksaan">
                </table>
                <div class="row">
                  <div class="col-md-12">
                    <div class="table-responsive">
                      <form id="form_odontogram" method="post" action="<?php echo base_url('dokter/home/insert_data_odontogram'); ?>">
                        
                    <table class="table table-bordered table-striped" style="text-align: center;">
                      <thead>
                        <tr>
                          <td colspan="4"><button type="submit" id="btn_simpan_odontogram" class="btn btn-success pull-right" style="display: none;"><i class="fa fa-save"></i> Simpan</button>
                      <a id="btn_edit_odontogram" class="btn btn-primary pull-right"><i class="fa fa-edit"></i> Edit</a>
                      <a id="btn_close_odontogram" class="btn btn-danger pull-right" style="display: none;"><i class="fa fa-close"></i> Cancel</a></td>
                        </tr>
                        <tr class="bg-maroon disabled">
                          <td colspan="4" style="text-align: center;"><h3> Formulir Pemeriksaan Odontogram </h3> </td>
                        </tr>
                      </thead>
                      <tbody>
                    
                        <?php foreach ($data as $og) {?>
                          <input type="hidden" id="asdadas" name="id_pasien" value="<?php cetak($og['id_pasien']);?>">
                      <tr>
                        <td>11[51]</td>
                        <td><input autocomplete="off" type="text" name="1151" class="form-control og-inpt" id="1151" readonly value="<?php if(isset($og['a11[51]'])){ cetak($og['a11[51]']);};?>"></td>
                        <td><input autocomplete="off" type="text" name="2161" class="form-control og-inpt" id="2161" readonly="" value="<?php if(isset($og['a[61]21'])){ cetak($og['a[61]21']);};?>"></td>
                        <td>[61]21</td>
                      </tr>
                      <tr>
                        <td>12[52]</td>
                        <td><input autocomplete="off" type="text" name="1252" class="form-control og-inpt" id="1252" readonly="" value="<?php if(isset($og['a12[52]'])){ cetak($og['a12[52]']);};?>"></td>
                        <td><input autocomplete="off" type="text" name="2262" class="form-control og-inpt" id="2262" readonly="" value="<?php if(isset($og['a[62]22'])){ cetak($og['a[62]22']);};?>"></td>
                        <td>[62]22</td>
                      </tr>
                      <tr>
                        <td>13[53]</td>
                        <td><input autocomplete="off" type="text" name="1353" class="form-control og-inpt" id="1353" readonly="" value="<?php if(isset($og['a13[53]'])){ cetak($og['a13[53]']);};?>"></td>
                        <td><input autocomplete="off" type="text" name="2363" class="form-control og-inpt" id="2363" readonly="" value="<?php if(isset($og['a[63]23'])){ cetak($og['a[63]23']);};?>"></td>
                        <td>[63]23</td>
                      </tr>
                      <tr>
                        <td>14[54]</td>
                        <td><input autocomplete="off" type="text" name="1454" class="form-control og-inpt" id="1454" readonly=""  value="<?php if(isset($og['a14[54]'])){ cetak($og['a14[54]']);};?>"></td>
                        <td><input autocomplete="off" type="text" name="2464" class="form-control og-inpt" id="2464" readonly=""  value="<?php if(isset($og['a[64]24'])){ cetak($og['a[64]24']);};?>"></td>
                        <td>[64]24</td>
                      </tr>
                      <tr>
                        <td>15[55]</td>
                        <td><input autocomplete="off" type="text" name="1555" class="form-control og-inpt" id="1555" readonly=""  value="<?php if(isset($og['a15[55]'])){ cetak($og['a15[55]']);};?>"></td>
                        <td><input autocomplete="off" type="text" name="2565" class="form-control og-inpt" id="2565" readonly="" value="<?php if(isset($og['a[65]25'])){ cetak($og['a[65]25']);};?>"></td>
                        <td>[65]25</td>
                      </tr>
                      <tr>
                        <td>16</td>
                        <td><input autocomplete="off" type="text" name="16" class="form-control og-inpt" id="16" readonly="" value="<?php if(isset($og['a16'])){ cetak($og['a16']);};?>"></td>
                        <td><input autocomplete="off" type="text" name="26" class="form-control og-inpt" id="26" readonly="" value="<?php if(isset($og['a26'])){ cetak($og['a26']);};?>"></td>
                        <td>26</td>
                      </tr>
                      <tr>
                        <td>17</td>
                        <td><input autocomplete="off" type="text" name="17" class="form-control og-inpt" id="17" readonly="" value="<?php if(isset($og['a17'])){ cetak($og['a17']);};?>"></td>
                        <td><input autocomplete="off" type="text" name="27" class="form-control og-inpt" id="27" readonly="" value="<?php if(isset($og['a27'])){ cetak($og['a27']);};?>"></td>
                        <td>27</td>
                      </tr>
                      <tr>
                        <td>18</td>
                        <td><input autocomplete="off" type="text" name="18" class="form-control og-inpt" id="18" readonly="" value="<?php if(isset($og['a18'])){ cetak($og['a18']);};?>"></td>
                        <td><input autocomplete="off" type="text" name="28" class="form-control og-inpt" id="28" readonly="" value="<?php if(isset($og['a28'])){ cetak($og['a28']);};?>"></td>
                        <td>28</td>
                      </tr>
                      <tr>
                        <td colspan="4" style="text-align: center;"></td>
                      </tr>
                      <tr>
                        <td>48</td>
                        <td><input autocomplete="off" type="text" name="48" class="form-control og-inpt" id="48" readonly="" value="<?php if(isset($og['a48'])){ cetak($og['a48']);};?>"></td>
                        <td><input autocomplete="off" type="text" name="38" class="form-control og-inpt" id="38" readonly="" value="<?php if(isset($og['a38'])){ cetak($og['a38']);};?>"></td>
                        <td>38</td>
                      </tr>
                      <tr>
                        <td>47</td>
                        <td><input autocomplete="off" type="text" name="47" class="form-control og-inpt" id="47" readonly="" value="<?php if(isset($og['a47'])){ cetak($og['a47']);};?>"></td>
                        <td><input autocomplete="off" type="text" name="37" class="form-control og-inpt" id="37" readonly="" value="<?php if(isset($og['a37'])){ cetak($og['a37']);};?>"></td>
                        <td>37</td>
                      </tr>
                      <tr>
                        <td>46</td>
                        <td><input autocomplete="off" type="text" name="46" class="form-control og-inpt" id="46" readonly="" value="<?php if(isset($og['a46'])){ cetak($og['a46']);};?>"></td>
                        <td><input autocomplete="off" type="text" name="36" class="form-control og-inpt" id="36" readonly="" value="<?php if(isset($og['a36'])){ cetak($og['a36']);};?>"></td>
                        <td>36</td>
                      </tr>
                      <tr>
                        <td>45[85]</td>
                        <td><input autocomplete="off" type="text" name="4585" class="form-control og-inpt" id="4585" readonly="" value="<?php if(isset($og['a45[85]'])){ cetak($og['a45[85]']);};?>"></td>
                        <td><input autocomplete="off" type="text" name="3575" class="form-control og-inpt" id="3575" readonly="" value="<?php if(isset($og['a[75]35'])){ cetak($og['a[75]35']);};?>"></td>
                        <td>[75]35</td>
                      </tr>
                      <tr>
                        <td>44[84]</td>
                        <td><input autocomplete="off" type="text" name="4484" class="form-control og-inpt" id="4484" readonly="" value="<?php if(isset($og['a44[84]'])){ cetak($og['a44[84]']);};?>"></td>
                        <td><input autocomplete="off" type="text" name="3474" class="form-control og-inpt" id="3474" readonly="" value="<?php if(isset($og['a[74]34'])){ cetak($og['a[74]34']);};?>"></td>
                        <td>[74]34</td>
                      </tr>
                      <tr>
                        <td>43[83]</td>
                        <td><input autocomplete="off" type="text" name="4383" class="form-control og-inpt" id="4383" readonly="" value="<?php if(isset($og['a43[83]'])){ cetak($og['a43[83]']);};?>"></td>
                        <td><input autocomplete="off" type="text" name="3373" class="form-control og-inpt" id="3373" readonly="" value="<?php if(isset($og['a[73]33'])){ cetak($og['a[73]33']);};?>"></td>
                        <td>73[33]</td>
                      </tr>
                      <tr>
                        <td>42[82]</td>
                        <td><input autocomplete="off" type="text" name="4282" class="form-control og-inpt" id="4282" readonly="" value="<?php if(isset($og['a42[82]'])){ cetak($og['a42[82]']);};?>"></td>
                        <td><input autocomplete="off" type="text" name="3272" class="form-control og-inpt" id="3272" readonly="" value="<?php if(isset($og['a[72]32'])){ cetak($og['a[72]32']);};?>"></td>
                        <td>[72]32</td>
                      </tr>
                      <tr>
                        <td>41[81]</td>
                        <td><input autocomplete="off" type="text" name="4181" class="form-control og-inpt" id="4181" readonly="" value="<?php if(isset($og['a41[81]'])){ cetak($og['a41[81]']);};?>"></td>
                        <td><input autocomplete="off" type="text" name="3171" class="form-control og-inpt" id="3171" readonly=""  value="<?php if(isset($og['a[71]31'])){ cetak($og['a[71]31']);};?>"></td>
                        <td>[71]31</td>
                      </tr>
                      <table class="table table-bordered table-striped">
                        <tbody>
                          <!-- <tr>
                            <td style="width: 10%;">Occlusi</td>
                            <td style="width: 1%;">:</td>
                            <td><select name="og_occlusi[]" class="form-control og-inpt1" id="og_occlusi" disabled multiple="multiple">
                              <?php// foreach ($data_occlusi as $row ) {
                                //echo '<option value='.$row['id_occlusi'].'>'.$row['keterangan_occlusi'].'</option>';
                              //}?>
                            </select></td>
                          </tr>
                          <tr>
                            <td style="width: 10%;">Torus Palatinus</td>
                            <td style="width: 1%;">:</td>
                            <td><select autocomplete="off" name="og_toruspalatinus[]" class="form-control og-inpt1" id="og_toruspalatinus" disabled multiple="multiple">
                              <?php// foreach ($data_toruspalatinus as $row ) {
                                //echo '<option value='.$row['id_toruspalatinus'].'>'.$row['keterangan_toruspalatinus'].'</option>';
                              //}?>
                            </select></td>
                          </tr>
                          <tr>
                            <td style="width: 10%;">Torus Mandibularis</td>
                            <td style="width: 1%;">:</td>
                            <td><select autocomplete="off" name="og_torusmandibularis[]" class="form-control og-inpt1" id="og_torusmandibularis" disabled multiple="multiple">
                              <?php //foreach ($data_torusmandibularis as $row ) {
                                //echo '<option value='.$row['id_torusmandibularis'].'>'.$row['keterangan_torusmandibularis'].'</option>';
                              //}?>
                            </select></td>
                          </tr>
                          <tr>
                            <td style="width: 10%;">Palatum</td>
                            <td style="width: 1%;">:</td>
                            <td><select autocomplete="off" name="og_palatum[]" class="form-control og-inpt1" id="og_palatum" disabled multiple="multiple">
                              <?php //foreach ($data_palatum as $row ) {
                              //  echo '<option value='.$row['id_palatum'].'>'.$row['keterangan_palatum'].'</option>';
                             // }?>
                            </select></td>
                          </tr>
                          <tr>
                            <td style="width: 10%;">Diastema</td>
                            <td style="width: 1%;">:</td>
                            <td><select autocomplete="off" name="og_diastema[]" class="form-control og-inpt1" id="og_diastema" disabled multiple="multiple">
                              <?php //foreach ($data_diastema as $row ) {
                                //echo '<option value='.$row['id_diastema'].'>'.$row['keterangan_diastema'].'</option>';
                              //}?>
                            </select></td>
                          </tr>
                          <tr>
                            <td style="width: 10%;">Gigi Anomali</td>
                            <td style="width: 1%;">:</td>
                            <td><select autocomplete="off" name="og_gigianomali[]" class="form-control og-inpt1" id="og_gigianomali" disabled multiple="multiple">
                              <?php //foreach ($data_gigianomali as $row ) {
                                //echo '<option value='.$row['id_gigianomali'].'>'.$row['keterangan_gigianomali'].'</option>';
                              //}?>
                            </select></td>
                          </tr> -->
                          <tr>
                            <td style="width: 10%;">Occlusi</td>
                            <td style="width: 1%;">:</td>
                            <td><input autocomplete="off" type="text" name="og_occlusi" class="form-control og-inpt" id="og_occlusi" readonly value="<?php if(isset($og['occlusi_odontogram'])){ cetak($og['occlusi_odontogram']);};?>"></td>
                          </tr>
                          <tr>
                            <td style="width: 10%;">Torus Palatinus</td>
                            <td style="width: 1%;">:</td>
                            <td><input autocomplete="off" type="text" name="og_toruspalatinus" class="form-control og-inpt" id="og_toruspalatinus" readonly value="<?php if(isset($og['toruspalatinus_odontogram'])){ cetak($og['toruspalatinus_odontogram']);};?>"></td>
                          </tr>
                          <tr>
                            <td style="width: 10%;">Torus Mandibularis</td>
                            <td style="width: 1%;">:</td>
                            <td><input autocomplete="off" type="text" name="og_torusmandibularis" class="form-control og-inpt" id="og_torusmandibularis" readonly value="<?php if(isset($og['torusmandibularis_odontogram'])){ cetak($og['torusmandibularis_odontogram']);};?>"></td>
                          </tr>
                          <tr>
                            <td style="width: 10%;">Palatum</td>
                            <td style="width: 1%;">:</td>
                            <td><input autocomplete="off" type="text" name="og_palatum" class="form-control og-inpt" id="og_palatum" readonly value="<?php if(isset($og['palatum_odontogram'])){ cetak($og['palatum_odontogram']);};?>"></td>
                          </tr>
                          <tr>
                            <td style="width: 10%;">Diastema</td>
                            <td style="width: 1%;">:</td>
                            <td><input autocomplete="off" type="text" name="og_diastema" class="form-control og-inpt" id="og_diastema" readonly value="<?php if(isset($og['diastema_odontogram'])){ cetak($og['diastema_odontogram']);};?>"></td>
                          </tr>
                          <tr>
                            <td style="width: 10%;">Gigi Anomali</td>
                            <td style="width: 1%;">:</td>
                            <td><input autocomplete="off" type="text" name="og_gigianomali" class="form-control og-inpt" id="og_gigianomali" readonly value="<?php if(isset($og['gigianomali_odontogram'])){ cetak($og['gigianomali_odontogram']);};?>"></td>
                          </tr>
                          <tr>
                            <td style="width: 10%;">Lain-lain</td>
                            <td style="width: 1%;">:</td>
                            <td><input autocomplete="off" type="text" name="og_lainlain" class="form-control og-inpt" id="og_lainlain" readonly value="<?php if(isset($og['lainlain_odontogram'])){ cetak($og['lainlain_odontogram']);};?>"></td>
                          </tr>
                        </tbody>
                      </table>
                      <div class="input-group">
                        <span class="input-group-addon">D:&nbsp</span>
                        <input autocomplete="off" type="text" name="og_d" class="form-control og-inpt" id="og_d" readonly value="<?php if(isset($og['d_odontogram'])){ cetak($og['d_odontogram']);};?>">
                      </div>
                      <div class="input-group">
                        <span class="input-group-addon">M:&nbsp</span>
                        <input autocomplete="off" type="text" name="og_m" class="form-control og-inpt" id="og_m" readonly value="<?php if(isset($og['m_odontogram'])){ cetak($og['m_odontogram']);};?>">
                      </div>
                      <div class="input-group">
                        <span class="input-group-addon">F:&nbsp</span>
                        <input autocomplete="off" type="text" name="og_f" class="form-control og-inpt" id="og_f" readonly value="<?php if(isset($og['f_odontogram'])){ cetak($og['f_odontogram']);};?>">
                      </div>
                    <?php } ?>
                    
                  </form>
                    </tbody>
                    </table>
                  </div>
                  </div>
                </div>