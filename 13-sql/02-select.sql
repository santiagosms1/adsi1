select * from pokemons;

select name from pokemons;

select name , speed from pokemons;

select distinct type from pokemons;

--muestra pokemones tipo agua 
SELECT
from pokemons
where type= 'water';

--muestra pokemones tipo agua y electricos
SELECT *
from pokemons
where type= 'water'
or type = 'electric';

--muestra pokemones con fuerza menor a 1000
select *
from pokemons
where strength <1000;

--muestra pokemones diferentes a agua
select *
from pokemons
where type <> 'water';

--muestreme todos los pokemones donde el tipo sea agua y su velocidad sea mayor a 80
select *
from pokemons
where type= 'water'
and speed >80;

--cuando se tenga un rango
select *
from pokemons
where stamina 
between 200
and 300;

--odenar ascendente
select * from pokemons order by strength;
select * from pokemons order by strength ASC;

-- ordenar descendente
select * from pokemons order by strength DESC;

--limitar y en que fila comenzar
select * from pokemons limit 10 ;

-- offset para decir hasta cuantas cosas me quiere mostrar
select * from pokemons limit 10 offset 10;

-- busquedas

--mostrar todos los que inician con la letra W

select * from pokemons where type like 'w%';

-- mostrar todos los que terminan con la letra C
select * from pokemons where type like '%c';

-- para mostrar todo tanto al final como al principio con la letra ma
select * from pokemons where name like '%ma%';

-- para buscar que no tengan una letra en especifico con la letra ma
select * from pokemons where name not like '%ma%';

-- mostrar ambas cosas 
select * from pokemons where type in ('fire','electric');

--alias 
SELECT t.nombre as name_trainer,
p.name as name_pokemon,
g.name as  name_gym
from trainers as t ,pokemons as p , gyms as g
where t.id = p.trainer_id 
and t.gym_id =g.id;

-- seleccionar la cantidad de algo en especifico 
select count (p.id) as number_pokemons
from pokemons as p , trainers as t 
where t.id = p.trainer_id
and t.id =1;

-- inner join 
SELECT trainers.nombre AS nombre_trainer, gyms.name AS name_gym, 
pokemons.name AS name_pokemon
FROM trainers
INNER JOIN gyms
ON trainers.gym_id = gyms.id
INNER JOIN pokemons
ON pokemons.trainer_id = trainers.id
ORDER BY trainers.nombre;

--left join
SELECT trainers.name AS name_trainer, gyms.name AS name_gym, 
COUNT(pokemons.id) AS num_pokemons
FROM trainers
LEFT JOIN gyms
ON trainers.gym_id = gyms.id
LEFT JOIN pokemons
ON pokemons.trainer_id = trainers.id
GROUP BY trainers.id;
 
--right join
 SELECT trainers.name AS name_trainer, gyms.name AS name_gym, 
pokemons.name AS name_pokemon
FROM trainers
RIGHT JOIN gyms
ON trainers.gym_id = gyms.id AND trainers.id = 1
RIGHT JOIN pokemons
ON pokemons.trainer_id = trainers.id;

--join 
SELECT trainers.name AS name_trainer, gyms.name AS name_gym, 
pokemons.name AS name_pokemon
FROM trainers
JOIN gyms
ON trainers.gym_id = gyms.id AND trainers.id = 1
JOIN pokemons
ON pokemons.trainer_id = trainers.id
ORDER BY trainers.name;

-- consultar todo 
SELECT name FROM trainers
UNION
SELECT name FROM gyms
UNION
SELECT name FROM pokemons;

--vistas
CREATE VIEW view_pokemons AS
SELECT trainers.nombre AS nombre_trainer, gyms.name AS name_gym, 
COUNT(pokemons.id) AS num_pokemons
FROM trainers
LEFT JOIN gyms
ON trainers.gym_id = gyms.id
LEFT JOIN pokemons
ON pokemons.trainer_id = trainers.id
GROUP BY trainers.id;
