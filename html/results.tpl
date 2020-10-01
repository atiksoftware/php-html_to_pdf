{include file=".header.tpl" }


<div id="page-results">

	<div class="clearfix my-4">
		<div class="float-left font-weight-bold border-bottom">Notification No. AMR/ROU-TR20/COV19</div> 
		<div class="float-right font-weight-bold border-bottom">Dated: 01.20.2020</div>
	</div>


    <table class="table table-bordered table-sm">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">FIRSTNAME</th>
                <th scope="col">LASTNAME</th>
                <th scope="col">EMAIL</th>
                <th scope="col">SCORE</th>
                <th scope="col">GROUP</th>
            </tr>
        </thead>
        <tbody>
			{foreach from=$results item=row}
				<tr>
					<th scope="row">{$row.index}</th>
					<td>{$row.firstname}</td>
					<td>{$row.lastname}</td> 
					<td>{$row.email}</td> 
					<td>{$row.score}</td> 
					<td>{$row.group}</td> 
				</tr>
			{/foreach} 
        </tbody>
    </table>

	<p>
		<b>Note:</b>
		Its just generated random users and random scores. Means no reality. List created for make example result page. And also this list can convert to pdf
	</p>
	<p>
	Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat quis odit atque doloremque voluptatem corrupti recusandae? Repellat cupiditate harum voluptatem ea dolorem aperiam. A minima sint expedita rerum veritatis eveniet!</p>


</div>


{include file=".footer.tpl" }