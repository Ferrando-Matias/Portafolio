using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace HerenciaEjemplo
{
    internal abstract class Empleado : IEmpleado 
    {
        public string Nombre { get; set; }
        public int Id { get; set; }
        public double SalarioBase { get; set; }

        public Empleado(string nombre, int id, double salarioBase)
        {
            Nombre = nombre;
            Id = id;
            SalarioBase = salarioBase;
        }





        public virtual double CalcularSalario()
        {
            return SalarioBase;
        }

        public virtual void MostrarInformacion()
        {
            Console.WriteLine($"Nombre: {Nombre}, ID: {Id}, Salario Base: {SalarioBase}");
        }
        public virtual double CalcularBonificacion()
        {
            // Bonificación estándar (puede ser cero)
            return 0;
        }
    }
}
