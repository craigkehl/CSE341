CREATE TABLE public.conferences
(
    id integer NOT NULL DEFAULT nextval(‘conferences_id_seq’::regclass),
    year integer NOT NULL,
    season character varying(10) COLLATE pg_catalog.“default” NOT NULL,
    session character varying(45) COLLATE pg_catalog.“default” NOT NULL
);
    
    ,
    CONSTRAINT conferences_pkey PRIMARY KEY (id)
);

CREATE TABLE public.notes
(
    id integer NOT NULL DEFAULT nextval(‘notes_id_seq’::regclass),
    note text COLLATE pg_catalog.“default” NOT NULL,
    userid integer NOT NULL,
    talkid integer NOT NULL,
    CONSTRAINT notes_pkey PRIMARY KEY (id),
    CONSTRAINT fk_talkid FOREIGN KEY (talkid)
        REFERENCES public.talks (id) MATCH SIMPLE
        ON UPDATE NO ACTION
        ON DELETE NO ACTION,
    CONSTRAINT fk_userid FOREIGN KEY (userid)
        REFERENCES public.“user” (id) MATCH SIMPLE
        ON UPDATE NO ACTION
        ON DELETE NO ACTION
)

CREATE TABLE public.speakers
(
    id integer NOT NULL DEFAULT nextval(‘speakers_id_seq’::regclass),
    speakername character varying(45) COLLATE pg_catalog.“default” NOT NULL,
    CONSTRAINT speakers_pkey PRIMARY KEY (id)
)

CREATE TABLE public.talks
(
    id integer NOT NULL DEFAULT nextval(‘talks_id_seq’::regclass),
    title character varying(45) COLLATE pg_catalog.“default” NOT NULL,
    confid integer NOT NULL,
    speakerid integer NOT NULL,
    CONSTRAINT talks_pkey PRIMARY KEY (id),
    CONSTRAINT fk_confid FOREIGN KEY (confid)
        REFERENCES public.conferences (id) MATCH FULL
        ON UPDATE NO ACTION
        ON DELETE NO ACTION
        DEFERRABLE INITIALLY DEFERRED,
    CONSTRAINT fk_speakerid FOREIGN KEY (speakerid)
        REFERENCES public.speakers (id) MATCH FULL
        ON UPDATE NO ACTION
        ON DELETE NO ACTION
        DEFERRABLE INITIALLY DEFERRED
)

CREATE TABLE public.“user”
(
    id integer NOT NULL DEFAULT nextval(‘user_id_seq’::regclass),
    fname character varying(45) COLLATE pg_catalog.“default” NOT NULL,
    lname character varying(45) COLLATE pg_catalog.“default” NOT NULL,
    username character varying(50) COLLATE pg_catalog.“default” NOT NULL,
    password character varying(255) COLLATE pg_catalog.“default” NOT NULL,
    CONSTRAINT user_pkey PRIMARY KEY (id)
)