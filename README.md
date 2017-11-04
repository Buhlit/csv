<h1>PHP to CSV file</h1>

<h2>Getting Started</h2>
<p>Download class.csv.php and include the file where you need to use it.</p>

<h2>How to use</h2>

<h4>Include the file and initialize</h4>
<pre>
include "class.csv.php";

$csv = new CSV();
</pre>

<h4>How to add header/headers</h4>
<p>You can add a single header using this method:</p>
<pre>
$csv->addHeader('Name');
</pre>

<p>You can also add multiple headers by using this method instead:</p>
<pre>
$csv->addHeaders(array(
    'Height',
    'Gender'
));
</pre>

<h4>How to add lists</h4>
<p>You can add lists by using this method:</p>
<pre>
$csv->addList(array(
    'John Doe',
    175,
    'Male'
));
</pre>

<h4>How to download the file</h4>
<p>You can download the CSV file by using this method:</p>
<pre>
$csv->download();
</pre>

<h4>How to change the name of the CSV file</h4>
<p>You can rename the CSV file by using this method:</p>
<pre>
$csv->setFileName('new_name');
</pre>