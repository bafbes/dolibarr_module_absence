
	<div class="no-print">			
		 [recherche.titreRecherche;block=tr;strconv=no;protect=no]
		<br/>
		<table class="border" style="width:60%">	
			<tr >
				<td colspan="2"><b>[translate.InformSearchAbsencesParameters;strconv=no]</b></td>	
			</tr>
			<tr >
				<td> [translate.StartDate;strconv=no]</td> <td> [recherche.date_debut;block=tr;strconv=no;protect=no]</td>
			</tr>
			<tr >
				<td> [translate.EndDate;strconv=no]</td> <td> [recherche.date_fin;block=tr;strconv=no;protect=no]</td>
			</tr>
			<tr >
				<td> [translate.Group;strconv=no]</td> <td rel="combo-group"> [recherche.TGroupe;block=tr;strconv=no;protect=no]</td>
			</tr>
			<tr >
				<td>[translate.Or;strconv=no] [translate.User;strconv=no]</td> <td rel="combo-user"> [recherche.TUser;block=tr;strconv=no;protect=no]</td>
			</tr>
			<tr >
				<td colspan="2" style="text-align:center"> [recherche.btValider;block=tr;strconv=no;protect=no]</td>
			</tr>	
		</table>	
	</div>

	<br><br><br><br>
<script type="text/javascript">
	
	$(document).ready(function() {
		
		$('td[rel=combo-group] select').change(function() {
			$('td[rel=combo-user] select').val(0);
		});
		
		$('td[rel=combo-user] select').change(function() {
			$('td[rel=combo-group] select').val(0);
		});
		
		
	});
	
	
</script>
