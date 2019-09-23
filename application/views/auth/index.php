<main>
	<section id="lista_usuarios" class="mt-5 container">
		<div class="lista_usuarios__corpo_principal table-responsive">
			<h1><?= lang('index_heading'); ?></h1>
			<p><?= lang('index_subheading'); ?></p>

			<div id="infoMessage"><?= $message; ?></div>


			<table class="table">
				<?php $cont = 1; ?>
				<thead class="thead-dark">
					<tr>
						<th scope="col">#</th>
						<th scope="col"><?= lang('index_fname_th'); ?></th>
						<th scope="col"><?= lang('index_lname_th'); ?></th>
						<th scope="col"><?= lang('index_email_th'); ?></th>
						<th scope="col"><?= lang('index_groups_th'); ?></th>
						<th scope="col"><?= lang('index_status_th'); ?></th>
						<th scope="col"><?= lang('index_action_th'); ?></th>
					</tr>
				</thead>
				<tbody>
						<?php foreach ($users as $user) : ?>
						<tr>
							<th scope="row"><?= $cont ?></th>
							<td><?= htmlspecialchars($user->first_name, ENT_QUOTES, 'UTF-8'); ?></td>
							<td><?= htmlspecialchars($user->last_name, ENT_QUOTES, 'UTF-8'); ?></td>
							<td><?= htmlspecialchars($user->email, ENT_QUOTES, 'UTF-8'); ?></td>
							<td>
								<?php foreach ($user->groups as $group) : ?>
									<?= anchor("auth/edit_group/" . $group->id, htmlspecialchars($group->name, ENT_QUOTES, 'UTF-8')); ?><br />
								<?php endforeach ?>
							</td>
							<td><?= ($user->active) ? anchor("auth/deactivate/" . $user->id, lang('index_active_link')) : anchor("auth/activate/" . $user->id, lang('index_inactive_link')); ?></td>
							<td><?= anchor("auth/edit_user/" . $user->id, 'Editar'); ?></td>
						</tr>
						<?php $cont++ ?>
					<?php endforeach; ?>
					</tbody>
			</table>
		</div>
		<div class="row mt-5">
			<a class="btn btn-primary ml-3" href="<?= base_url('auth/create_user') ?>" role="button">Criar Usuário</a>
			<a class="btn btn-primary ml-3" href="<?= base_url('auth/create_group') ?>" role="button">Criar Grupo</a>
		</div>
	</section>
</main>