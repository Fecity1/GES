[[!FormIt? &hooks=`msg-send` &submitVar=`send`]]
<div class="tab-content">

	<div class="tab-pane fade in active" id="profileTab">
		<div class="container">
			<div class="profile">
				[[!If? &subject=`[[+reg.company]]` &operator=`!empty` &then=`<p>Организация: [[+reg.company]]</p>`]]
				[[!If? &subject=`[[+reg.name]]` &operator=`!empty` &then=`<p>ФИО: [[+reg.name]]</p>`]]
				[[!If? &subject=`[[+reg.snils]]` &operator=`!empty` &then=`<p>СНИЛС: [[+reg.snils]]</p>`]]
				[[!If? &subject=`[[+reg.inn]]` &operator=`!empty` &then=`<p>ИНН: [[+reg.inn]]</p>`]]
				[[!If? &subject=`[[+reg.contact]]` &operator=`!empty` &then=`<p>Контактное лицо: [[+reg.contact]]</p>`]]
				[[!If? &subject=`[[+reg.phone]]` &operator=`!empty` &then=`<p>Контактный номер: [[+reg.phone]]</p>`]]
				[[!If? &subject=`[[+reg.email]]` &operator=`!empty` &then=`<p>Email: [[+reg.email]]</p>`]]
			</div>
		</div>
	</div>

	<div class="tab-pane fade" id="podachaTP">
		<div class="container">
			<div class="content">
				<div name="tab1" class="s">
					<div class="section1">
						<span></span>

						<h2>Подать заявку на технологическое присоединение</h2>
						<p>Заявка принимается в работу с даты предоставления заявителем полного комплекта сведений и документов, предусмотренных <a target="_blank" href="/customers/services/tp/regulations_tp/">Правилами технологического присоединения</a></p>
						<div>
							<a class="button ico" href="[[~21? &scheme=`abs`]]"><span>Оформить заявку</span></a>
						</div>
					</div>

					<div class="section2">
						<h6>После оформления заявки:</h6>
						<ul>
							<li class="stage1"><span></span>Заключить договор технологического присоединения</li>
							<li class="stage2"><span></span>Выполнить мероприятия предусмотренные договором об осуществлениитехнологического присоединения</li>
							<li class="stage3"><span></span>Получение разрешения на допуск к эксплуатации объектов заявителя (в соответствии с п. 7 Правил ТП)</li>
							<li class="stage4"><span></span>Осуществление сетевой организацией фактического присоединения объектов заявителя к электрическим сетям</li>
							<li class="stage5"><span></span>Фактический приём (подача) напряжения и мощности, осуществляемый путём включения коммутационного аппарата (фиксация коммутационного аппарата в положение «включено»)</li>
							<li class="stage6"><span></span>Получить Акт технологического присоединения, акт разграничения балансовой принадлежности, акт разграничения эксплуатационной ответственности, а также акт согласования технологической и (или) аварийной брони (в соответствии с п. 7 Правил ТП)</li>
						</ul>
					</div>
					<div id="vertline"></div>
				</div>
			</div>
		</div>

	</div>

	<div class="tab-pane fade" id="moiZayavki">
		<div class="container">
			[[!pdoPage?
		    &class=`ZayavFz`
		    &tpl=`tpl.ZayavCard`
		    &element=`getSheets`
		    &sortby=`{
		    					"Status":"ASC",
		    					"date" : "DESC"
		    }`
		    &limit=`50`
		    &where=`{"created_by":[[!+modx.user.id]]}`
			]]
			[[!pdoPage?
		    &class=`ZayavUl`
		    &tpl=`tpl.ZayavCard`
		    &element=`getSheets`
		    &sortby=`{
		    					"Status":"ASC",
		    					"date" : "DESC"
		    }`
		    &limit=`50`
		    &where=`{"created_by":[[!+modx.user.id]]}`
			]]
			[[!pdoPage?
		    &class=`ZayavUlmax`
		    &tpl=`tpl.ZayavCard`
		    &element=`getSheets`
		    &sortby=`{
		    					"Status":"ASC",
		    					"date" : "DESC"
		    }`
		    &limit=`50`
		    &where=`{"created_by":[[!+modx.user.id]]}`
			]]
			[[!pdoPage?
		    &class=`ZayavVr`
		    &tpl=`tpl.ZayavCard`
		    &element=`getSheets`
		    &sortby=`{
		    					"Status":"ASC",
		    					"date" : "DESC"
		    }`
		    &limit=`50`
		    &where=`{"created_by":[[!+modx.user.id]]}`
			]]
		</div>
	</div>

	<div class="tab-pane fade" id="messages">
		<div class="container">
			[[!msg-inbox? &userId=`[[+modx.user.id]]`]]
			<form action="[[*id]]" method="post">

             <label class="control-label">Сообщение для МУП ГЭС</label><textarea class="form-control" name="msg"></textarea>



             <input class="btn btn-primary" type="submit" name="send" value="Отправить"/>

       </form>
		</div>
	</div>

</div>

<script type="text/javascript">
			function setVertlineHeight() {
				var 	vertlineTopHeight = 0,
					vertlineBottomHeight = 0;

				vertlineTopHeight = $('div[name="tab1"] .section1').height() + 126;
				vertlineBottomHeight = $('div[name="tab1"] .section2 li.stage6').position().top - $('div[name="tab1"] .section2').position().top + 286;

				$('#vertline').css({
					'border-top': vertlineTopHeight + 'px solid #3189da',
					'border-bottom':  vertlineBottomHeight + 'px solid #8499a7'
				});
			}

			setVertlineHeight();
</script>

</div>