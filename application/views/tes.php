      <div class="container" id="print">
        <div class="section">
            <h5> 
                <?php $w++; if($week == "This") echo"<a class='waves-effect waves-light blue-text' href=".base_url()."report/week/".$w."><i class='fa fa-chevron-circle-left'></i></a>"; $w--; ?>
                <?php 
                    $w++;
                    if($w > 1 && $week == "Last" && !empty($speed_week)) echo"<a class='waves-effect waves-light blue-text' href=".base_url()."report/week/".$w.">><i class='fa fa-chevron-circle-left'></i></a>"; 
                ?>
                <?php echo $week; $w--; if($w > 1) echo " ".$w."";?> Week 
                <?php if($week == "Last") echo "<a href=".base_url()."report"."><i class='fa fa-chevron-circle-right'></i></a>"; ?>
            </h5>
          <!-- Report Speedtest -->
          <?php foreach($host_speed as $hs): ?>
        <ul class="collapsible" data-collapsible="popout">
        <li>
            <div class="collapsible-header"><p><?php echo $hs['nama'] ?></p></div>
                <div class="collapsible-body">
                    <div class="container">
                    <table class="responsive-table">
                        <thead>
                            <tr>
                                <th rowspan="2">No</th>
                                <th rowspan="2">Nama Gedung</th>
                                <th rowspan="2">Titik Pengukuran</th>
                                <th rowspan="2">IP Vlan</th>
                                <th rowspan="2">Download</th>
                                <th rowspan="2">Upload</th>
                        </thead>
                        <tbody>
                                        <?php 
                                            $tipe = $hs['id_host'];
                                            $num = 1;
                                            $query = $this->db->query("SELECT gedung.nama, lokasi.lokasi, speed.dl_speed, speed.ul_speed, speed.vlan FROM `speed` INNER JOIN `lokasi` ON `lokasi`.`id_lokasi` = `speed`.`lokasi_id` INNER JOIN `host` ON `host`.`id_host` = `speed`.`host_id` join `gedung` ON gedung.id_gedung = lokasi.gedung_id WHERE WEEK(created) = WEEK(NOW() - INTERVAL '$w' WEEK) AND host_id='$tipe'");
                                            foreach($query->result_array() as $item): 
                                        ?>
                            <tr>
                                <td><?php echo $num ?></td>
                                <td><?php echo $item['nama'] ?></td>
                                <td><?php echo $item['lokasi'] ?></td>
                                <td><?php echo $item['vlan'] ?></td>
                                <td><?php echo $item['dl_speed']." Mbps"; ?></td>
                                <td><?php echo $item['ul_speed']." Mbps"; ?></td>
                            </tr>
                                        <?php 
                                            $num++;
                                            endforeach 
                                        ?>
                        </tbody>
                    </table>
                    </div>
                </div>
            </li>
        </ul>
          <?php endforeach ?>
          <!--Akhir report speedtest -->
          <!-- Report pingtest -->
          <?php foreach($host_ping as $hp): ?>
          <ul class="collapsible" data-collapsible="popout">
          <li>
                <div class="collapsible-header"><p>Ping <?php echo $hp['ip_address'] ?></p></div>
                <div class="collapsible-body">
                    <div class="container">
                
                                <table class="responsive-table">
                                    <thead>
                                        <tr>
                                            <th rowspan="2">No</th>
                                            <th rowspan="2">Nama Gedung</th>
                                            <th rowspan="2">Titik Pengukuran</th>
                                            <th rowspan="2">Sent</th>
                                            <th rowspan="2">Receive</th>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            $tipe = $hp['id_host'];
                                            $num = 1;
                                            $query = $this->db->query("SELECT gedung.nama, lokasi.lokasi, ping.ping_sent, ping.ping_receive FROM `ping` INNER JOIN `lokasi` ON `lokasi`.`id_lokasi` = `ping`.`lokasi_id` INNER JOIN `host` ON `host`.`id_host` = `ping`.`host_id` join `gedung` ON gedung.id_gedung = lokasi.gedung_id WHERE WEEK(created) = WEEK(NOW() - INTERVAL '$w' WEEK) AND host_id='$tipe'");
                                            foreach($query->result_array() as $item): 
                                        ?>
                                        <tr>
                                            <td><?php echo $num ?></td>
                                            <td><?php echo $item['nama'] ?></td>
                                            <td><?php echo $item['lokasi'] ?></td>
                                            <td><?php echo $item['ping_sent'] ?></td>
                                            <td><?php echo $item['ping_receive'] ?></td>
                                        </tr>
                                        <?php 
                                            $num++;
                                            endforeach 
                                        ?>
                                    </tbody>
                                </table>
                    </div>
              </div>
              </li></ul>
          <?php endforeach ?>
          <!-- Akhir report pingtest -->
        </div>
      </div>

      <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
        <a class="btn-floating btn-large blue tooltipped" data-position="left" onclick="return printDiv('print');" data-delay="50" data-tooltip="Print">
          <i class="large material-icons">print</i>
        </a>
      </div>

    </main>

    <footer class="page-footer grey darken-2">
      <div class="footer-copyright">
        <div class="container">
        Copyright &copy; <a href="http://pdis.bppt.go.id/" class="bold">PDIS-BPPT</a>. All Right Reserved.
        <a class="grey-text text-lighten-4 right" href="#">Designed by Rebecca's Studio</a>
        </div>
      </div>
    </footer>
    
    <script>
        function printDiv(divName) {
            var printContent = document.getElementById(divName).innerHTML;
            var originalContent = document.body.innerHTML;
            
            document.body.innerHTML = printContent;
            
            window.print();
            
            document.body.innerHTML = originalContent;
        }
    </script>
