using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace HerenciaEjemplo
{
    internal class Program
    {
        static void Main(string[] args)
        {
           Empleado empleado1 = new EmpleadoTiempoCompleto("Juan Perez", 1, 3000, 10);

            Empleado empleado2 = new EmpleadoTiempoParcial("Ana Garcia", 2, 1000, 20, 15);

            // No puedes hacer esto, porque Empleado es abstracto:
            //Empleado empleado1 = new Empleado("Juan Perez", 1, 3000); // Esto daría un error de compilación.

            //empleado1.MostrarInformacion();
            //Console.WriteLine($"Salario Total: {empleado1.CalcularSalario()}");

            //Console.WriteLine("----------------------------");

            //empleado2.MostrarInformacion();
            //Console.WriteLine($"Salario Total: {empleado2.CalcularSalario()}");
            //Console.WriteLine("----------------------------");

            //EmpleadoTiempoCompleto empleado3 = new EmpleadoTiempoCompleto("matias",3,1500,15);
            //empleado3.MostrarInformacion();
            //Console.WriteLine($"Salario Total: {empleado3.CalcularSalario()}");
            
            //Console.WriteLine($"Bonificacion: {empleado3.Bonificacion}"); //solo accesible desde el tipo de la clase derivada, no desde la clase padre

            //Console.WriteLine("----------------------------");
            //List<Empleado> empleados = new List<Empleado> { empleado1, empleado2 };
            //foreach (Empleado empleado in empleados)
            //{
            //    empleado.MostrarInformacion();
            //    Console.WriteLine($"Salario Total: {empleado.CalcularSalario()}");
            //    Console.WriteLine($"Bonificacion: {empleado.CalcularBonificacion()}"); 
            //    Console.WriteLine();
                /*
                 * Limitación: No puedes acceder a Bonificacion de EmpleadoTiempoCompleto ni a HorasTrabajadas de EmpleadoTiempoParcial directamente a través de una referencia de tipo Empleado.
                 */
            }

            /*
             * Usando el tipo base Empleado:
             * Ventaja: Permite tratar diferentes tipos de empleados de manera uniforme. Puedes usar un array o una lista de Empleado y manipular todos los empleados sin preocuparte por sus tipos específicos.
             * Desventaja: Solo tienes acceso a los miembros definidos en la clase base Empleado y a los métodos sobrescritos. No puedes acceder a los miembros específicos de las clases derivadas directamente.

             * Usando el tipo derivado específico:
             * Ventaja: Permite acceder a los métodos y propiedades específicas de EmpleadoTiempoCompleto. Puedes usar todos los miembros públicos de la clase derivada.
             * Desventaja: Pierdes la generalidad que proporciona el polimorfismo. No puedes agregar EmpleadoTiempoParcial a una lista de EmpleadoTiempoCompleto.
             
             * Elegir entre uno u otro depende del contexto y de lo que necesites hacer en tu aplicación. Si necesitas manipular diferentes tipos de empleados de manera uniforme, usa el tipo base. Si necesitas acceder a funcionalidades específicas de una clase derivada, usa el tipo derivado.
             */

            Console.ReadKey();
        }
    }
}
