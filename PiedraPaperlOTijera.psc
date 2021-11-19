Algoritmo PiedraPaperlOTijera
	Escribir  "Juego de Piedra, Papel y Tijera"
	Escribir  "- - - M E N Ú - - -"
	Escribir  " 1.- Piedra."
	Escribir  " 2.- Papel."
	Escribir  " 3.- Tijera."
	Escribir Sin Saltar "     :"
	Repetir
		Leer jugada_usuario
		Si jugada_usuario > 3 o jugada_usuario < 1 Entonces
			Escribir Sin Saltar "Valor de la jugada incorrecta. Inténtelo de nuevo:"
		FinSi
		
	Hasta Que  jugada_usuario >= 1 y jugada_usuario <= 3
	Segun jugada_usuario Hacer
		1:
			Escribir "Tu jugada ha sido: piedra"
		2: 
			Escribir "Tu jugada ha sido: papel"
		3:
			Escribir "Tu jugada ha sido: tijera"
	FinSegun
	
	jugada_maquina <- 1 + Azar(3)
	
	Si jugada_maquina = 1 Entonces
		Escribir "La jugada de la máquina ha sido: piedra"
	FinSi 
	Si jugada_maquina = 2 Entonces
		Escribir "La jugada de la máquina ha sido: papel"
	FinSi
	Si jugada_maquina = 3 Entonces
		Escribir "La jugada de la máquina ha sido: Tijera"
	FinSi
	
	Si jugada_usuario = jugada_maquina Entonces
		Escribir "Empate"
	SiNo
		Si (jugada_usuario = 2 y jugada_maquina = 1) o (jugada_usuario = 1 y jugada_maquina = 3) o (jugada_usuario = 3 y jugada_maquina = 2) Entonces
			Escribir "Gana el Usuario"
		FinSi
		si(jugada_usuario = 1 y jugada_maquina = 2) o (jugada_usuario = 3 y jugada_maquina = 1) o (jugada_usuario = 2 y jugada_maquina = 3) Entonces
			Escribir "Gana la Máquina"
		FinSi
		
	FinSi
	
	
FinAlgoritmo
