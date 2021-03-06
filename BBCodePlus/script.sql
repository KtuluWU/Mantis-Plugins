
/* mantis_bugnote_text_table */
update mantis_bugnote_text_table set note=REPLACE(note,'<p>','');
update mantis_bugnote_text_table set note=REPLACE(note,'</p>','');
update mantis_bugnote_text_table set note=REPLACE(note,'<li>','[*]');
update mantis_bugnote_text_table set note=REPLACE(note,'</li>','');
update mantis_bugnote_text_table set note=REPLACE(note,'<ul>','[list]');
update mantis_bugnote_text_table set note=REPLACE(note,'</ul>','[/list]');
update mantis_bugnote_text_table set note=REPLACE(note,'<ol>','[list=1]');
update mantis_bugnote_text_table set note=REPLACE(note,'</ol>','[/list]');
update mantis_bugnote_text_table set note=REPLACE(note,'<i>','[i]');
update mantis_bugnote_text_table set note=REPLACE(note,'</i>','[/i]');
update mantis_bugnote_text_table set note=REPLACE(note,'<b>','[b]');
update mantis_bugnote_text_table set note=REPLACE(note,'</b>','[/b]');
update mantis_bugnote_text_table set note=REPLACE(note,'<u>','[u]');
update mantis_bugnote_text_table set note=REPLACE(note,'</u>','[/u]');
update mantis_bugnote_text_table set note=REPLACE(note,'<em>','[i]');
update mantis_bugnote_text_table set note=REPLACE(note,'</em>','[/i]');
update mantis_bugnote_text_table set note=REPLACE(note,'<code>','[code]');
update mantis_bugnote_text_table set note=REPLACE(note,'</code>','[/code]');
update mantis_bugnote_text_table set note=REPLACE(note,'<strong>','[b]');
update mantis_bugnote_text_table set note=REPLACE(note,'</strong>','[/b]');

/* mantis_bug_revision_table */
update mantis_bug_revision_table set value=REPLACE(value,'<p>','');
update mantis_bug_revision_table set value=REPLACE(value,'</p>','');
update mantis_bug_revision_table set value=REPLACE(value,'<li>','[*]');
update mantis_bug_revision_table set value=REPLACE(value,'</li>','');
update mantis_bug_revision_table set value=REPLACE(value,'<ul>','[list]');
update mantis_bug_revision_table set value=REPLACE(value,'</ul>','[/list]');
update mantis_bug_revision_table set value=REPLACE(value,'<ol>','[list=1]');
update mantis_bug_revision_table set value=REPLACE(value,'</ol>','[/list]');
update mantis_bug_revision_table set value=REPLACE(value,'<i>','[i]');
update mantis_bug_revision_table set value=REPLACE(value,'</i>','[/i]');
update mantis_bug_revision_table set value=REPLACE(value,'<b>','[b]');
update mantis_bug_revision_table set value=REPLACE(value,'</b>','[/b]');
update mantis_bug_revision_table set value=REPLACE(value,'<u>','[u]');
update mantis_bug_revision_table set value=REPLACE(value,'</u>','[/u]');
update mantis_bug_revision_table set value=REPLACE(value,'<em>','[i]');
update mantis_bug_revision_table set value=REPLACE(value,'</em>','[/i]');
update mantis_bug_revision_table set value=REPLACE(value,'<code>','[code]');
update mantis_bug_revision_table set value=REPLACE(value,'</code>','[/code]');
update mantis_bug_revision_table set value=REPLACE(value,'<strong>','[b]');
update mantis_bug_revision_table set value=REPLACE(value,'</strong>','[/b]');

/* mantis_bug_table */
update mantis_bug_table set summary=REPLACE(summary,'<p>','');
update mantis_bug_table set summary=REPLACE(summary,'</p>','');
update mantis_bug_table set summary=REPLACE(summary,'<li>','[*]');
update mantis_bug_table set summary=REPLACE(summary,'</li>','');
update mantis_bug_table set summary=REPLACE(summary,'<ul>','[list]');
update mantis_bug_table set summary=REPLACE(summary,'</ul>','[/list]');
update mantis_bug_table set summary=REPLACE(summary,'<ol>','[list=1]');
update mantis_bug_table set summary=REPLACE(summary,'</ol>','[/list]');
update mantis_bug_table set summary=REPLACE(summary,'<i>','[i]');
update mantis_bug_table set summary=REPLACE(summary,'</i>','[/i]');
update mantis_bug_table set summary=REPLACE(summary,'<b>','[b]');
update mantis_bug_table set summary=REPLACE(summary,'</b>','[/b]');
update mantis_bug_table set summary=REPLACE(summary,'<u>','[u]');
update mantis_bug_table set summary=REPLACE(summary,'</u>','[/u]');
update mantis_bug_table set summary=REPLACE(summary,'<em>','[i]');
update mantis_bug_table set summary=REPLACE(summary,'</em>','[/i]');
update mantis_bug_table set summary=REPLACE(summary,'<code>','[code]');
update mantis_bug_table set summary=REPLACE(summary,'</code>','[/code]');
update mantis_bug_table set summary=REPLACE(summary,'<strong>','[b]');
update mantis_bug_table set summary=REPLACE(summary,'</strong>','[/b]');

/* mantis_bug_text_table */
update mantis_bug_text_table set description=REPLACE(description,'<p>','');
update mantis_bug_text_table set description=REPLACE(description,'</p>','');
update mantis_bug_text_table set description=REPLACE(description,'<li>','[*]');
update mantis_bug_text_table set description=REPLACE(description,'</li>','');
update mantis_bug_text_table set description=REPLACE(description,'<ul>','[list]');
update mantis_bug_text_table set description=REPLACE(description,'</ul>','[/list]');
update mantis_bug_text_table set description=REPLACE(description,'<ol>','[list=1]');
update mantis_bug_text_table set description=REPLACE(description,'</ol>','[/list]');
update mantis_bug_text_table set description=REPLACE(description,'<i>','[i]');
update mantis_bug_text_table set description=REPLACE(description,'</i>','[/i]');
update mantis_bug_text_table set description=REPLACE(description,'<b>','[b]');
update mantis_bug_text_table set description=REPLACE(description,'</b>','[/b]');
update mantis_bug_text_table set description=REPLACE(description,'<u>','[u]');
update mantis_bug_text_table set description=REPLACE(description,'</u>','[/u]');
update mantis_bug_text_table set description=REPLACE(description,'<em>','[i]');
update mantis_bug_text_table set description=REPLACE(description,'</em>','[/i]');
update mantis_bug_text_table set description=REPLACE(description,'<code>','[code]');
update mantis_bug_text_table set description=REPLACE(description,'</code>','[/code]');
update mantis_bug_text_table set description=REPLACE(description,'<strong>','[b]');
update mantis_bug_text_table set description=REPLACE(description,'</strong>','[/b]');

update mantis_bug_text_table set steps_to_reproduce=REPLACE(steps_to_reproduce,'<p>','');
update mantis_bug_text_table set steps_to_reproduce=REPLACE(steps_to_reproduce,'</p>','');
update mantis_bug_text_table set steps_to_reproduce=REPLACE(steps_to_reproduce,'<li>','[*]');
update mantis_bug_text_table set steps_to_reproduce=REPLACE(steps_to_reproduce,'</li>','');
update mantis_bug_text_table set steps_to_reproduce=REPLACE(steps_to_reproduce,'<ul>','[list]');
update mantis_bug_text_table set steps_to_reproduce=REPLACE(steps_to_reproduce,'</ul>','[/list]');
update mantis_bug_text_table set steps_to_reproduce=REPLACE(steps_to_reproduce,'<ol>','[list=1]');
update mantis_bug_text_table set steps_to_reproduce=REPLACE(steps_to_reproduce,'</ol>','[/list]');
update mantis_bug_text_table set steps_to_reproduce=REPLACE(steps_to_reproduce,'<i>','[i]');
update mantis_bug_text_table set steps_to_reproduce=REPLACE(steps_to_reproduce,'</i>','[/i]');
update mantis_bug_text_table set steps_to_reproduce=REPLACE(steps_to_reproduce,'<b>','[b]');
update mantis_bug_text_table set steps_to_reproduce=REPLACE(steps_to_reproduce,'</b>','[/b]');
update mantis_bug_text_table set steps_to_reproduce=REPLACE(steps_to_reproduce,'<u>','[u]');
update mantis_bug_text_table set steps_to_reproduce=REPLACE(steps_to_reproduce,'</u>','[/u]');
update mantis_bug_text_table set steps_to_reproduce=REPLACE(steps_to_reproduce,'<em>','[i]');
update mantis_bug_text_table set steps_to_reproduce=REPLACE(steps_to_reproduce,'</em>','[/i]');
update mantis_bug_text_table set steps_to_reproduce=REPLACE(steps_to_reproduce,'<code>','[code]');
update mantis_bug_text_table set steps_to_reproduce=REPLACE(steps_to_reproduce,'</code>','[/code]');
update mantis_bug_text_table set steps_to_reproduce=REPLACE(steps_to_reproduce,'<strong>','[b]');
update mantis_bug_text_table set steps_to_reproduce=REPLACE(steps_to_reproduce,'</strong>','[/b]');

update mantis_bug_text_table set additional_information=REPLACE(additional_information,'<p>','');
update mantis_bug_text_table set additional_information=REPLACE(additional_information,'</p>','');
update mantis_bug_text_table set additional_information=REPLACE(additional_information,'<li>','[*]');
update mantis_bug_text_table set additional_information=REPLACE(additional_information,'</li>','');
update mantis_bug_text_table set additional_information=REPLACE(additional_information,'<ul>','[list]');
update mantis_bug_text_table set additional_information=REPLACE(additional_information,'</ul>','[/list]');
update mantis_bug_text_table set additional_information=REPLACE(additional_information,'<ol>','[list=1]');
update mantis_bug_text_table set additional_information=REPLACE(additional_information,'</ol>','[/list]');
update mantis_bug_text_table set additional_information=REPLACE(additional_information,'<i>','[i]');
update mantis_bug_text_table set additional_information=REPLACE(additional_information,'</i>','[/i]');
update mantis_bug_text_table set additional_information=REPLACE(additional_information,'<b>','[b]');
update mantis_bug_text_table set additional_information=REPLACE(additional_information,'</b>','[/b]');
update mantis_bug_text_table set additional_information=REPLACE(additional_information,'<u>','[u]');
update mantis_bug_text_table set additional_information=REPLACE(additional_information,'</u>','[/u]');
update mantis_bug_text_table set additional_information=REPLACE(additional_information,'<em>','[i]');
update mantis_bug_text_table set additional_information=REPLACE(additional_information,'</em>','[/i]');
update mantis_bug_text_table set additional_information=REPLACE(additional_information,'<code>','[code]');
update mantis_bug_text_table set additional_information=REPLACE(additional_information,'</code>','[/code]');
update mantis_bug_text_table set additional_information=REPLACE(additional_information,'<strong>','[b]');
update mantis_bug_text_table set additional_information=REPLACE(additional_information,'</strong>','[/b]');

/* mantis_custom_field_table */
update mantis_custom_field_string_table set value=REPLACE(value,'<p>','');
update mantis_custom_field_string_table set value=REPLACE(value,'</p>','');
update mantis_custom_field_string_table set value=REPLACE(value,'<li>','[*]');
update mantis_custom_field_string_table set value=REPLACE(value,'</li>','');
update mantis_custom_field_string_table set value=REPLACE(value,'<ul>','[list]');
update mantis_custom_field_string_table set value=REPLACE(value,'</ul>','[/list]');
update mantis_custom_field_string_table set value=REPLACE(value,'<ol>','[list=1]');
update mantis_custom_field_string_table set value=REPLACE(value,'</ol>','[/list]');
update mantis_custom_field_string_table set value=REPLACE(value,'<i>','[i]');
update mantis_custom_field_string_table set value=REPLACE(value,'</i>','[/i]');
update mantis_custom_field_string_table set value=REPLACE(value,'<b>','[b]');
update mantis_custom_field_string_table set value=REPLACE(value,'</b>','[/b]');
update mantis_custom_field_string_table set value=REPLACE(value,'<u>','[u]');
update mantis_custom_field_string_table set value=REPLACE(value,'</u>','[/u]');
update mantis_custom_field_string_table set value=REPLACE(value,'<em>','[i]');
update mantis_custom_field_string_table set value=REPLACE(value,'</em>','[/i]');
update mantis_custom_field_string_table set value=REPLACE(value,'<code>','[code]');
update mantis_custom_field_string_table set value=REPLACE(value,'</code>','[/code]');
update mantis_custom_field_string_table set value=REPLACE(value,'<strong>','[b]');
update mantis_custom_field_string_table set value=REPLACE(value,'</strong>','[/b]');

/* mantis_custom_field_table */
update mantis_custom_field_table set possible_values=REPLACE(possible_values,'<p>','');
update mantis_custom_field_table set possible_values=REPLACE(possible_values,'</p>','');
update mantis_custom_field_table set possible_values=REPLACE(possible_values,'<li>','[*]');
update mantis_custom_field_table set possible_values=REPLACE(possible_values,'</li>','');
update mantis_custom_field_table set possible_values=REPLACE(possible_values,'<ul>','[list]');
update mantis_custom_field_table set possible_values=REPLACE(possible_values,'</ul>','[/list]');
update mantis_custom_field_table set possible_values=REPLACE(possible_values,'<ol>','[list=1]');
update mantis_custom_field_table set possible_values=REPLACE(possible_values,'</ol>','[/list]');
update mantis_custom_field_table set possible_values=REPLACE(possible_values,'<i>','[i]');
update mantis_custom_field_table set possible_values=REPLACE(possible_values,'</i>','[/i]');
update mantis_custom_field_table set possible_values=REPLACE(possible_values,'<b>','[b]');
update mantis_custom_field_table set possible_values=REPLACE(possible_values,'</b>','[/b]');
update mantis_custom_field_table set possible_values=REPLACE(possible_values,'<u>','[u]');
update mantis_custom_field_table set possible_values=REPLACE(possible_values,'</u>','[/u]');
update mantis_custom_field_table set possible_values=REPLACE(possible_values,'<em>','[i]');
update mantis_custom_field_table set possible_values=REPLACE(possible_values,'</em>','[/i]');
update mantis_custom_field_table set possible_values=REPLACE(possible_values,'<code>','[code]');
update mantis_custom_field_table set possible_values=REPLACE(possible_values,'</code>','[/code]');
update mantis_custom_field_table set possible_values=REPLACE(possible_values,'<strong>','[b]');
update mantis_custom_field_table set possible_values=REPLACE(possible_values,'</strong>','[/b]');

-- /* mantis_email_table */
-- update mantis_email_table set body=REPLACE(body,'<p>','');
-- update mantis_email_table set body=REPLACE(body,'<li>','[*]');
-- update mantis_email_table set body=REPLACE(body,'</li>','');
-- update mantis_email_table set body=REPLACE(body,'<ul>','[list]');
-- update mantis_email_table set body=REPLACE(body,'</ul>','[/list]');
-- update mantis_email_table set body=REPLACE(body,'<ol>','[list=1]');
-- update mantis_email_table set body=REPLACE(body,'</ol>','[/list]');
-- update mantis_email_table set body=REPLACE(body,'<i>','[i]');
-- update mantis_email_table set body=REPLACE(body,'</i>','[/i]');
-- update mantis_email_table set body=REPLACE(body,'<b>','[b]');
-- update mantis_email_table set body=REPLACE(body,'</b>','[/b]');
-- update mantis_email_table set body=REPLACE(body,'<u>','[u]');
-- update mantis_email_table set body=REPLACE(body,'</u>','[/u]');
-- update mantis_email_table set body=REPLACE(body,'<em>','[i]');
-- update mantis_email_table set body=REPLACE(body,'</em>','[/i]');
-- update mantis_email_table set body=REPLACE(body,'<code>','[code]');
-- update mantis_email_table set body=REPLACE(body,'</code>','[/code]');
-- update mantis_email_table set body=REPLACE(body,'<strong>','[b]');
-- update mantis_email_table set body=REPLACE(body,'</strong>','[/b]');

/* mantis_news_table */
update mantis_news_table set headline=REPLACE(headline,'<p>','');
update mantis_news_table set headline=REPLACE(headline,'</p>','');
update mantis_news_table set headline=REPLACE(headline,'<li>','[*]');
update mantis_news_table set headline=REPLACE(headline,'</li>','');
update mantis_news_table set headline=REPLACE(headline,'<ul>','[list]');
update mantis_news_table set headline=REPLACE(headline,'</ul>','[/list]');
update mantis_news_table set headline=REPLACE(headline,'<ol>','[list=1]');
update mantis_news_table set headline=REPLACE(headline,'</ol>','[/list]');
update mantis_news_table set headline=REPLACE(headline,'<i>','[i]');
update mantis_news_table set headline=REPLACE(headline,'</i>','[/i]');
update mantis_news_table set headline=REPLACE(headline,'<b>','[b]');
update mantis_news_table set headline=REPLACE(headline,'</b>','[/b]');
update mantis_news_table set headline=REPLACE(headline,'<u>','[u]');
update mantis_news_table set headline=REPLACE(headline,'</u>','[/u]');
update mantis_news_table set headline=REPLACE(headline,'<em>','[i]');
update mantis_news_table set headline=REPLACE(headline,'</em>','[/i]');
update mantis_news_table set headline=REPLACE(headline,'<code>','[code]');
update mantis_news_table set headline=REPLACE(headline,'</code>','[/code]');
update mantis_news_table set headline=REPLACE(headline,'<strong>','[b]');
update mantis_news_table set headline=REPLACE(headline,'</strong>','[/b]');

update mantis_news_table set body=REPLACE(body,'<p>','');
update mantis_news_table set body=REPLACE(body,'</p>','');
update mantis_news_table set body=REPLACE(body,'<li>','[*]');
update mantis_news_table set body=REPLACE(body,'</li>','');
update mantis_news_table set body=REPLACE(body,'<ul>','[list]');
update mantis_news_table set body=REPLACE(body,'</ul>','[/list]');
update mantis_news_table set body=REPLACE(body,'<ol>','[list=1]');
update mantis_news_table set body=REPLACE(body,'</ol>','[/list]');
update mantis_news_table set body=REPLACE(body,'<i>','[i]');
update mantis_news_table set body=REPLACE(body,'</i>','[/i]');
update mantis_news_table set body=REPLACE(body,'<b>','[b]');
update mantis_news_table set body=REPLACE(body,'</b>','[/b]');
update mantis_news_table set body=REPLACE(body,'<u>','[u]');
update mantis_news_table set body=REPLACE(body,'</u>','[/u]');
update mantis_news_table set body=REPLACE(body,'<em>','[i]');
update mantis_news_table set body=REPLACE(body,'</em>','[/i]');
update mantis_news_table set body=REPLACE(body,'<code>','[code]');
update mantis_news_table set body=REPLACE(body,'</code>','[/code]');
update mantis_news_table set body=REPLACE(body,'<strong>','[b]');
update mantis_news_table set body=REPLACE(body,'</strong>','[/b]');

/* mantis_project_table */
update mantis_project_table set description=REPLACE(description,'<p>','');
update mantis_project_table set description=REPLACE(description,'</p>','');
update mantis_project_table set description=REPLACE(description,'<li>','[*]');
update mantis_project_table set description=REPLACE(description,'</li>','');
update mantis_project_table set description=REPLACE(description,'<ul>','[list]');
update mantis_project_table set description=REPLACE(description,'</ul>','[/list]');
update mantis_project_table set description=REPLACE(description,'<ol>','[list=1]');
update mantis_project_table set description=REPLACE(description,'</ol>','[/list]');
update mantis_project_table set description=REPLACE(description,'<i>','[i]');
update mantis_project_table set description=REPLACE(description,'</i>','[/i]');
update mantis_project_table set description=REPLACE(description,'<b>','[b]');
update mantis_project_table set description=REPLACE(description,'</b>','[/b]');
update mantis_project_table set description=REPLACE(description,'<u>','[u]');
update mantis_project_table set description=REPLACE(description,'</u>','[/u]');
update mantis_project_table set description=REPLACE(description,'<em>','[i]');
update mantis_project_table set description=REPLACE(description,'</em>','[/i]');
update mantis_project_table set description=REPLACE(description,'<code>','[code]');
update mantis_project_table set description=REPLACE(description,'</code>','[/code]');
update mantis_project_table set description=REPLACE(description,'<strong>','[b]');
update mantis_project_table set description=REPLACE(description,'</strong>','[/b]');

/* mantis_project_version_table */
update mantis_project_version_table set description=REPLACE(description,'<p>','');
update mantis_project_version_table set description=REPLACE(description,'</p>','');
update mantis_project_version_table set description=REPLACE(description,'<li>','[*]');
update mantis_project_version_table set description=REPLACE(description,'</li>','');
update mantis_project_version_table set description=REPLACE(description,'<ul>','[list]');
update mantis_project_version_table set description=REPLACE(description,'</ul>','[/list]');
update mantis_project_version_table set description=REPLACE(description,'<ol>','[list=1]');
update mantis_project_version_table set description=REPLACE(description,'</ol>','[/list]');
update mantis_project_version_table set description=REPLACE(description,'<i>','[i]');
update mantis_project_version_table set description=REPLACE(description,'</i>','[/i]');
update mantis_project_version_table set description=REPLACE(description,'<b>','[b]');
update mantis_project_version_table set description=REPLACE(description,'</b>','[/b]');
update mantis_project_version_table set description=REPLACE(description,'<u>','[u]');
update mantis_project_version_table set description=REPLACE(description,'</u>','[/u]');
update mantis_project_version_table set description=REPLACE(description,'<em>','[i]');
update mantis_project_version_table set description=REPLACE(description,'</em>','[/i]');
update mantis_project_version_table set description=REPLACE(description,'<code>','[code]');
update mantis_project_version_table set description=REPLACE(description,'</code>','[/code]');
update mantis_project_version_table set description=REPLACE(description,'<strong>','[b]');
update mantis_project_version_table set description=REPLACE(description,'</strong>','[/b]');

/* mantis_user_profile_table */
update mantis_user_profile_table set description=REPLACE(description,'<p>','');
update mantis_user_profile_table set description=REPLACE(description,'</p>','');
update mantis_user_profile_table set description=REPLACE(description,'<li>','[*]');
update mantis_user_profile_table set description=REPLACE(description,'</li>','');
update mantis_user_profile_table set description=REPLACE(description,'<ul>','[list]');
update mantis_user_profile_table set description=REPLACE(description,'</ul>','[/list]');
update mantis_user_profile_table set description=REPLACE(description,'<ol>','[list=1]');
update mantis_user_profile_table set description=REPLACE(description,'</ol>','[/list]');
update mantis_user_profile_table set description=REPLACE(description,'<i>','[i]');
update mantis_user_profile_table set description=REPLACE(description,'</i>','[/i]');
update mantis_user_profile_table set description=REPLACE(description,'<b>','[b]');
update mantis_user_profile_table set description=REPLACE(description,'</b>','[/b]');
update mantis_user_profile_table set description=REPLACE(description,'<u>','[u]');
update mantis_user_profile_table set description=REPLACE(description,'</u>','[/u]');
update mantis_user_profile_table set description=REPLACE(description,'<em>','[i]');
update mantis_user_profile_table set description=REPLACE(description,'</em>','[/i]');
update mantis_user_profile_table set description=REPLACE(description,'<code>','[code]');
update mantis_user_profile_table set description=REPLACE(description,'</code>','[/code]');
update mantis_user_profile_table set description=REPLACE(description,'<strong>','[b]');
update mantis_user_profile_table set description=REPLACE(description,'</strong>','[/b]');