<html>
  <head>
    <title>Handbrake {$progress_percentage}%</title>
    <meta http-equiv="refresh" content="15">
  </head>
  <body>
    <center><img src="images/handbrake-logo.png" /></center><br>
    <center><h1>HandBrake {$handbrake_version} Encode</h1></center>
    <br><br>
    <table border="1">
      <tr>
        <td>Source Name</td>
        <td>{$video_name}</td>
      </tr>
      <tr>
        <td>Video Duration</td>
        <td>{$video_duration}</td>
      </tr>
      <tr>
        <td>Encode Progress</td>
        <td><img src="lib/progressbar.php?max=100&val={$progress_percentage}" /> {$progress_percentage}%</td>
      </tr>
      <tr>
        <td>Encode Average FPS</td>
        <td>{$progress_avg_fps} fps</td>
      </tr>
      <tr>
        <td>Encode ETA</td>
        <td>{$progress_eta}</td>
      </tr>
    </table>
    <br>
  </body>
</html>
