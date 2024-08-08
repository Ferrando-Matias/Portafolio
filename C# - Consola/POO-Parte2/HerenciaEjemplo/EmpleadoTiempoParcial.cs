using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace HerenciaEjemplo
{
    internal sealed class EmpleadoTiempoParcial : Empleado
    {
        public int HorasTrabajadas { get; set; }
        public double TarifaPorHora { get; set; }

        public EmpleadoTiempoParcial(string nombre, int id, double salarioBase, int horasTrabajadas, double tarifaPorHora)
            : base(nombre, id, salarioBase)
        {
            HorasTrabajadas = horasTrabajadas;
            TarifaPorHora = tarifaPorHora;
        }

        public override double CalcularSalario()
        {
            return SalarioBase + (HorasTrabajadas * TarifaPorHora);
        }

        public override void MostrarInformacion()
        {
            base.MostrarInformacion();
            Console.WriteLine($"Horas Trabajadas: {HorasTrabajadas}, Tarifa por Hora: {TarifaPorHora}");
        }
    }
}
