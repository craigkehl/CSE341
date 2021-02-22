INSERT INTO persons(first_name, last_name, birthdate, is_female) VALUES ('Zach', 'Erikson', '1998-03-15', false);

-- --------------------------------------------
-- Player List
-- --------------------------------------------
Select pl.first_name||' '||pl.last_name AS "Player", 
	pl.nick_name AS Nickname,
  EXTRACT(year FROM age(current_date,pl.birthdate)) :: int AS "Age",
  CASE When pl.is_female='t' THEN 'female' ELSE 'male' END AS "Gender",
   pa.first_name||' '||pa.last_name AS Parent
FROM persons pl JOIN parents 
   ON pl.id = person_child_id
   JOIN persons pa  
   ON person_parent_id = pa.id
AND EXTRACT(year FROM age(current_date,pl.birthdate)) < 18
AND primary_parent = 't';