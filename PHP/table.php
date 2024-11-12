<!-- ID: 2136108 
Name: Raiyan Subedar -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<!-- table.php -->
<?php
$title = 'Uniplay - Table';
include 'header.php';
?>

<!-- Table Section -->
<div class="table-container" style="padding: 20px;">
    <h1>New Releases Schedule</h1>
    <table class="release-schedule" cellpadding="10" cellspacing="0" border="1">
        <caption>Upcoming Releases on Uniplay</caption>
        <thead>
            <tr>
                <th>Show/Movie</th>
                <th>Type</th>
                <th>Season</th>
                <th>Episode</th>
                <th>Release Date</th>
                <th>Time</th>
                <th>Platform</th>
            </tr>
        </thead>
        <tbody>
            <!-- Show: Arcane -->
            <tr>
                <td rowspan="2">Arcane</td>
                <td rowspan="2">TV Show</td>
                <td>Season 2</td>
                <td>Episode 1</td>
                <td>Nov 15, 2024</td>
                <td>9:00 PM</td>
                <td>Netflix</td>
            </tr>
            <tr>
                <td>Season 2</td>
                <td>Episode 2</td>
                <td>Nov 22, 2024</td>
                <td>9:00 PM</td>
                <td>Netflix</td>
            </tr>

            <!-- Movie: The Last Duel -->
            <tr>
                <td>The Last Duel</td>
                <td>Movie</td>
                <td>N/A</td>
                <td>N/A</td>
                <td>Nov 20, 2024</td>
                <td>8:00 PM</td>
                <td>HBO Max</td>
            </tr>

            <!-- Show: Stranger Things -->
            <tr>
                <td rowspan="2">Stranger Things</td>
                <td rowspan="2">TV Show</td>
                <td>Season 5</td>
                <td>Episode 1</td>
                <td>Nov 25, 2024</td>
                <td>9:00 PM</td>
                <td>Netflix</td>
            </tr>
            <tr>
                <td>Season 5</td>
                <td>Episode 2</td>
                <td>Dec 2, 2024</td>
                <td>9:00 PM</td>
                <td>Netflix</td>
            </tr>

            <!-- Movie: Dune Part Two -->
            <tr>
                <td>Dune: Part Two</td>
                <td>Movie</td>
                <td>N/A</td>
                <td>N/A</td>
                <td>Nov 30, 2024</td>
                <td>7:00 PM</td>
                <td>Warner Bros.</td>
            </tr>

            <!-- Show: The Mandalorian -->
            <tr>
                <td rowspan="2">The Mandalorian</td>
                <td rowspan="2">TV Show</td>
                <td>Season 4</td>
                <td>Episode 1</td>
                <td>Dec 5, 2024</td>
                <td>8:00 PM</td>
                <td>Disney+</td>
            </tr>
            <tr>
                <td>Season 4</td>
                <td>Episode 2</td>
                <td>Dec 12, 2024</td>
                <td>8:00 PM</td>
                <td>Disney+</td>
            </tr>

            <!-- Footer row indicating more content -->
            <tr>
                <td colspan="7">More releases coming soon!</td>
            </tr>
        </tbody>
    </table>
</div>

<!-- Footer Section -->
<?php include 'footer.php'; ?>
</body>

</html>
